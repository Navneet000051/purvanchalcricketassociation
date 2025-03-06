<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TagController extends Controller
{
    //  show tag //
    public function index()
    {
        $data['title']='Tag';
        $data['edit_tag'] = '';
        return view('admin.tag', $data);
    }

    // add tag //
    public function addTag(Request $request)
    {
        $request->validate([
            'tag' => "required|unique:tags"
        ]);
        $user = new tag();
        $user['tag'] = $request->input('tag');
       
            $user->save();
            return redirect('tag')->with('success', 'Tag inserted successfully');
        
    }

    // show tag //
    public function showTag(Request $request)
    {
        if ($request->ajax()) {
            $data = tag::select('id', 'tag')->get();
            return DataTables::of($data)

                ->addColumn('action', function ($row) {

                    $btnedit  = '<a href="editTag' . $row->id . '" ><i class="fa fa-edit" style="font-size:20px;color:#414189; margin:1rem"></i></a>';

                    $btnDelete = '<a href="#" onClick = "deleteData(\'' . $row->id . '\')"><i class="fa fa-trash" style="font-size:20px;color:#f5325c"></i></a>';
                    return $btnedit . '' . $btnDelete;
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return redirect('tag');
    }

    // edit tag //
    public function editTag($id)
    {
        $user['title']='Tag';
        $user['edit_tag'] = tag::where('id', $id)->first();
        return view('admin.tag', $user);
    }

    //update tag //
    public function updateTag(Request $request)
    {
        $id = $request->id;
        $user['tag'] = $request->input('tag');
        $match_tag = tag::where('tag', $user['tag'])->where('id','!=',$id)->first();
        if ($match_tag) {
            return redirect('editTag'.$id)->with('error', 'Tag already exist');
        } else {
            tag::where('id', $id)->update($user);
            return redirect('editTag'.$id)->with('success', 'Tag updated successfully');
        }
    } 

    // delete tag //
    public function deleteTag($id)
    {
        tag::where('id', $id)->delete();
        return redirect('tag')->with('success', 'Tag deleted successfully');
    }
}
