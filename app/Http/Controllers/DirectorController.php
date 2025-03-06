<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Database\Seeders\AdminSeeder;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DirectorController extends Controller
{
    public function index()
    {
        $data['edit_directors'] = '';
        $data['title'] = 'directors';
        return view('admin.directors', $data);
    }

    public function addDirectors(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = new Director();
        $data['name'] = $request->input('name');
        $data->save();
        return redirect('directors')->with('success', "Director added successfully");
    }

    public function showDirectors(Request $request)
    { {
            if ($request->ajax()) {
                $data = Director::select('id', 'name', 'status')->orderBy('id', 'desc')->get();
                return DataTables::of($data)
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="editDirectors' . $row->id . '" ><i class="fa fa-edit" style="font-size:20px;color:#414189; margin:1rem"></i></a>';
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
                    ->rawColumns(['action', 'status'])
                    ->make(true);
            }
        }
    }

    public function editDirectors($id)
    {
        $data['title'] = 'directors';
        $data['edit_directors'] = Director::where('id', $id)->first();
        return view('admin.directors', $data);
    }

    public function updateDirectors(Request $request)
    {
        $id = $request->id;
        $data['name'] = $request->input('name');
        Director::where('id', $id)->update($data);
        return redirect('directors')->with('success', "Director updated successfully");
    }

    public function directorStatus($id)
    {
        $director = Director::select('status')->where('id', $id)->first();
        if ($director->status == 1) {
            $data['status'] = 0;
        } else {
            $data['status'] = 1;
        }
        Director::where('id', $id)->update($data);
    }

    public function deleteDirectors($id)
    {
        Director::where('id',$id)->delete();
        return redirect('directors')->with('success','Director deleted successfully');
    }
}
