<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
  // show catgeory //
  public function index()
  {
    $data['category_edit'] = '';
    $data['title'] = "Category";
    $data['category'] = '';
    return view('admin.category', $data);
  }

  // add category //
  public function addCategory(Request $request)
  {

    $request->validate([
      'name' => "required",
      'image' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
    ]);
    $user = new category();
    if ($request->hasFile('image')) {
      $name = $request->file('image')->getClientOriginalName();
      $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
      $request->file('image')->move(public_path('uploadCat/'), $filename);
      $user['image'] = $filename;
    }
    $user->name = $request->name;
    $name = $request->name;
    $checked_name = category::where('name', $name)->first();
    if ($checked_name) {
      return redirect('category')->with('error', 'Category name already exist');
    } else {
      $user->name = $request->name;
      $user->save();
      return redirect('category')->with('success', 'Category inserted Successfully');
    }
  }

  // list category //
  public function showCategory(Request $request)
  {
    if ($request->ajax()) {
      $data = category::select('id', 'name', 'image', 'status')->get();
      return Datatables::of($data)
        ->addColumn('action', function ($row) {
          $btn = '<a href="editCategory' . $row->id . '" ><i class="fa fa-edit" style="font-size:20px;color:#414189; margin:1rem"></i></a>';
          $btnDelete = '<a href="#" onClick = "deleteData(\'' . $row->id . '\')"><i class="fa fa-trash" style="font-size:20px;color:#f5325c"></i></a>';
          return $btn . '' . $btnDelete;
        })
        ->addColumn('image', function ($row) {
          if ($row->image) {
            $btn = '<div class="symbol symbol-50px"><a href="' . url('uploadCat/', [$row->image]) . '" target="_blank"><img border="0" width="40" class="img-rounded" align="center" src="' . url('uploadCat/', [$row->image]) . '" alt=""/></a></div> ';
          } else {
            $btn = 'N/A';
          }
          return $btn;
        })
        ->addIndexColumn()
        ->rawColumns(['action', 'image'])
        ->make(true);
    }
    return redirect('category');
  }

  // edit category //
  public function editCategory($id)
  {
    $data['title'] = "Category";
    $data['category_edit'] = category::where('id', $id)->first();
    return view('admin.category', $data);
  }

  // update category //
  public function updateCategory(Request $request)
  {
    $id = $request->id;
    $name = $request->name;
    $match_name = category::where('name', $name)->where('id', '!=', $id)->first();
    if ($match_name) {
      return redirect('editCategory' . $id)->with('error', 'Category name already exist');
    } else {
      $category = category::find($id);
      if ($request->hasFile('imageS')) {
        $file_path = public_path('uploadss/' . $category->image);
        if (File::exists($file_path)) {
          File::delete($file_path);
        }
        $name = $request->file('imageS')->getClientOriginalName();
        $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
        $request->file('imageS')->move(public_path('uploadCat/'), $filename);
        $user['image'] = $filename;
      }
      $user['name'] = $request->input('name');
      category::where('id', $id)->update($user);
      return redirect('category')->with('success', 'Category updated Successfully');
    }
  }

  //delete category //
  public function deleteCategory($id)
  {
    $user = category::find($id);
    $data = $user->image;
    $file_path = public_path('uploadCat/' . $data);
    if (File::exists($file_path)) {
      File::delete($file_path);
    }
    category::where('id', $id)->delete($file_path);
    return redirect('category')->with('success', 'Category deleted Successfully');
  }
}
