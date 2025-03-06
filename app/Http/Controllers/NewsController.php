<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $data['edit_news'] = '';
        return view('admin.news_cutting', $data);
    }

    public function addNews(Request $request)
    {
        $request->validate([
            'caption' => 'required|unique:news',
            'image' => 'required',
        ]);

        $news = new News();
        $news['caption'] = $request->input('caption');
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
            $request->file('image')->move(public_path('uploadNcutting/'), $filename);
            $news['image'] = $filename;
          }
        $news->save();
        return redirect('news')->with('success', "News added successfully");
    }

    public function showNews(Request $request)
    { {
            if ($request->ajax()) {
                $data = News::select('id', 'caption', 'image', 'status')->orderBy('id','desc')->get();
                return DataTables::of($data)
                    ->addColumn('image', function ($row) {
                        if ($row->image) {
                            $btn = '<div class="symbol symbol-50px"><a href="' . url('uploadNcutting/', [$row->image]) . '" target="_blank"><img border="0" width="40" class="img-rounded" align="center" src="' . url('uploadNcutting/', [$row->image]) . '" alt=""/></a></div> ';
                        } else {
                            $btn = 'N/A';
                        }
                        return $btn;
                    })
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="editNews' . $row->id . '" ><i class="fa fa-edit" style="font-size:20px;color:#414189; margin:1rem"></i></a>';
                        $btnDelete = '<a href="#" onClick = "deleteData(\'' . $row->id . '\')"><i class="fa fa-trash" style="font-size:20px;color:#f5325c"></i></a>';
                        return $btn . '' . $btnDelete;
                    })
                    ->addColumn('status', function ($row) {
                        if ($row->status == 1) {
                            $checked = "checked";
                        } else {
                            $checked = "";
                        }
                        $btn = ' <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox"
                        onClick="statusData(\'' . $row->id . '\')" ' . $checked . '>
                         </label>';
                        return $btn;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['image', 'action', 'status'])
                    ->make(true);
            }
        }
    }

    public function editNews($id)
    {

        $data['edit_news'] = News::where('id', $id)->first();
        return view('admin.news_cutting', $data);
    }

    public function updateNews(Request $request)
    {
        $id = $request->id;
        $caption = $request->caption;
        $match_caption = News::where('caption', $caption)->where('id', '!=', $id)->first();
        if ($match_caption) {
            return redirect('editNews' . $id)->with('error', "Captions title already exists");
        } else {
            $news['caption'] = $request->input('caption');
            if ($request->hasFile('imageS')) {
                $name = $request->file('imageS')->getClientOriginalName();
                $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
                $request->file('imageS')->move(public_path('uploadNcutting/'), $filename);
                $news['image'] = $filename;
              }
            News::where('id', $id)->update($news);
            return redirect('news')->with('success', "News updated successfully");
        }
    }
    public function statusNews($id)
    {
        $news = News::select('status')->where('id', $id)->first();

        if ($news->status == 1) {
            $data['status'] = 0;
        } else {
            $data['status'] = 1;
        }
        News::where('id', $id)->update($data);
    }

    public function deleteNews($id)
    {
        $news = News::find($id);
        $data = $news->image;
        $file_path=public_path('uploadNcutting/'.$data);

        if(File::exists($file_path)){
          File::Delete($file_path);
        }
        News::where('id', $id)->delete($file_path);
        return redirect('news')->with('success', "News deleted successfully");
    }
}
