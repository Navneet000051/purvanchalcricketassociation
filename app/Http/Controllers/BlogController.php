<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\Category;
use App\Models\manage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    // blog show  //
    public function index()
    {

        $data['title'] = "Blogs";
        $data['edit_blog'] = '';
        $data["category"] = DB::table("categories")->get();
        return view('admin.blog', $data);
    }

    // blog add //
    public function addBlog(Request $request)
    {

        $request->validate([
            'title' => "required|unique:blogs",
            'sub_title' => "required|unique:blogs",
            'category' => "required",
            'description' => "required",
            'image' => "required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048",
            'meta_key' => "required",
            'meta_description' => "required",
            'meta_title' => "required",
        ]);

        $user = new blog();
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
            $request->file('image')->move(public_path('uploadsNews/'), $filename);
            $user['image'] = $filename;
        }

        $user['title'] = $request->input('title');
        $user['sub_title'] = $request->input('sub_title');
        $user['category'] = $request->input('category');
        $user['description'] = $request->input('description');
        $user['meta_key'] = $request->input('meta_key');
        $user['meta_description'] = $request->input('meta_description');
        $user['meta_title'] = $request->input('meta_title');
        $user->save();
        return  redirect('showBlog')->with('success', 'Blog Inserted Successfully');
    }

    // blog listing //
    public function showBlog()
    {
        $data['blogs'] = blog::leftjoin('categories', 'categories.id', '=', 'blogs.category')->select('blogs.id as blog_id', 'categories.name as category_name', 'blogs.title as blog_title', 'blogs.sub_title as sub_title', 'blogs.image as blog_image')->get();
        $data['title'] = "Blog";
        return view('admin.list_blog', $data);
    }

    // edit blog //
    public function editBlog(Request $request)
    {

        $id = $request->id;
        $data['edit_blog'] = blog::where('id', $id)->first();
        $data["category"] = DB::table("categories")->get();
        $data['title'] = 'Blog';
        return  view('admin.blog', $data);
    }

    // update blog //
    public function updateBlog(Request $request)
    {

        $id = $request->id;

        $title = $request->title;
        $sub_title  = $request->sub_title;
        $title_match = blog::where('title', $title)->where('id', '!=', $id)->first();
        $subtitle_match = blog::where('sub_title',  $sub_title)->where('id', '!=', $id)->first();

        if ($title_match) {
            return redirect('editBlog/' . $id)->with('error', 'Blog title already exists');
        } else if ($subtitle_match) {
            return redirect('editBlog/' . $id)->with('error', 'Blog subtitle already exists');
        } else {
            $blog = blog::find($id);
            if ($request->hasFile('imageS')) {
                $file_path = public_path('uploadss/' . $blog->image);
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
                $name = $request->file('imageS')->getClientOriginalName();
                $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
                $request->file('imageS')->move(public_path('uploadsNews/'), $filename);

                $user['image'] = $filename;
            }
            $user['title'] = $request->input('title');
            $user['sub_title'] = $request->input('sub_title');
            $user['category'] = $request->input('category');
            $user['description'] = $request->input('description');
            $user['meta_key'] = $request->input('meta_key');
            $user['meta_description'] = $request->input('meta_description');
            $user['meta_title'] = $request->input('meta_title');

            blog::where('id', $id)->update($user);
            return redirect('showBlog')->with('success', 'Blog Updated Successfully');
        }
    }


    // delete blog //
    public function deleteBlog($id)
    {
        $user = blog::find($id);
        $data = $user->image;

        $file_path = public_path('uploadsNews/' . $data);
        if (File::exists($file_path)) {
            File::delete($file_path);
        }

        blog::where('id', $id)->delete($file_path);
        return redirect('showBlog')->with('success', 'Blog delete successfully');
    }
}
