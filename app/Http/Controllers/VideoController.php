<?php

namespace App\Http\Controllers;

use App\Models\imageCaption;
use App\Models\Video;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class VideoController extends Controller
{
    // show video page //
    public function index()
    {
        $data['title'] = 'Video';
        $data['edit_video'] = '';
        return view('admin.video', $data);
    }

    // add videos //
    public function addVideo(Request $request)
    {
        $request->validate([
            'title' => "required|unique:videos",
            'video' => "required",
            'link' => "required|unique:videos",
        ]);

        $data = new Video();
        $data['title'] = $request->input('title');
        $data['video'] = $request->input('video');
        $data['link'] = $request->input('link');
        $data->save();

        $data1['slug'] = str_replace(' ', '-', $request->title) . '-' . $data->id;
        Video::where('id', $data->id)->update($data1);
        return redirect('video')->with('success', 'Video inserted successfully');
    }

    //list videos //
    public function showVideo(Request $request)
    { {
            if ($request->ajax()) {
                $data = Video::select('id', 'title', 'video', 'link', 'status')->orderBy('id','desc')->get();
                return DataTables::of($data)
                    ->addColumn('video_type', function ($row) {
                        if ($row->video ==  1) {
                            $btn = 'media';
                        } else {
                            $btn = 'news video';
                        }
                        return $btn;
                    })
                    ->addColumn('status', function ($row) {
                        if ($row->status == 1) {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }
                        $btn = '<label class="form-check form-switch">
                          <input class="form-check-input" type="checkbox"
                          onClick="statusData(\'' . $row->id . '\')" ' . $checked . '>
                         </label>';
                        return $btn;
                    })
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="editVideo' . $row->id . '" ><i class="fa fa-edit" style="font-size:20px;color:#414189; margin:1rem"></i></a>';
                        $btnDelete = '<a href="#" onClick = "deleteData(\'' . $row->id . '\')"><i class="fa fa-trash" style="font-size:20px;color:#f5325c"></i></a>';
                        return $btn . '' . $btnDelete;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['video_type', 'status', 'action'])
                    ->make(true);
            }
            return redirect('video');
        }
    }

    // delete video //
    public function deleteVideo($id)
    {
        Video::where('id', $id)->delete();
        return redirect('video')->with('success', 'Video deleted successfully');
    }

    // edit video //
    public function editVideo($id)
    {
        $data['title'] = 'Video';
        $data['edit_video'] = Video::where('id', $id)->first();
        return view('admin.video', $data);
    }

    // update video //
    public function updateVideo(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $link = $request->link;
        $match_link = Video::where('link', $link)->where('id', '!=', $id)->first();
        $match_title = Video::where('title', $title)->where('id', '!=', $id)->first();
        if ($match_title) {
            return redirect('editVideo' . $id)->with('error', 'Video title already exists ');
        } elseif ($match_link) {
            return redirect('editVideo' . $id)->with('error', 'Video link already exists ');
        } else {
            $data['title'] = $request->input('title');
            $data['video'] = $request->input('video');
            $data['link'] = $request->input('link');
            Video::where('id', $id)->update($data);
            return redirect('video')->with('success', 'Video updated successfully');
        }
    }
    // update status //
    public function statusVideo($id)
    {
        $data = Video::select('status')->where('id', $id)->first();
        if ($data->status == 1) {
            $user['status'] = 0;
        } else {
            $user['status'] = 1;
        }
        Video::where('id', $id)->update($user);
    }
}
