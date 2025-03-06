<?php

namespace App\Http\Controllers;

use App\Models\amendment;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class AmendmentController extends Controller
{

    // create amendment //
    public function index()
    {
        $data["title"] = 'Amenment';
        $data['edit_amendment'] = '';
        return view('admin.amendment', $data);
    }

    // add amendment //
    public function addAmendment(Request $request)
    {
        $request->validate([
            'name' => "required",
            'designation' => "required",
            //'date' => "required",
           // 'description' => "required",
            'image' => "required",
        ]);

        $user = new amendment();

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
            $request->file('image')->move(public_path('uploadsAmend/'), $filename);
            $user['image'] = $filename;
        }
        $user['name'] = $request->input('name');
        $user['designation'] = $request->input('designation');
        $user['date'] = $request->input('date');
        $user['description'] = $request->input('description');
        $user->save();
        return redirect('amendment')->with('success', "Amendment inserted successfully");
    }

    // show amendment //
    public function showAmendment(Request $request)
    { {
            if ($request->ajax()) {
                $data = amendment::select('id', 'name', 'designation', 'image', 'status')->orderBy('id','desc')->get();
                return Datatables::of($data)
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="editAmendment' . $row->id . '" ><i class="fa fa-edit" style="font-size:20px;color:#414189; margin:1rem"></i></a>';
                        $btnDelete = '<a href="#" onClick = "deleteData(\'' . $row->id . '\')"><i class="fa fa-trash" style="font-size:20px;color:#f5325c"></i></a>';
                        return $btn . '' . $btnDelete;
                    })
                    ->addColumn('image', function ($row) {
                        if ($row->image) {
                            $btn = '<div class="symbol symbol-50px"><a href="' . url('uploadsAmend/', [$row->image]) . '" target="_blank"><img border="0" width="40" class="img-rounded" align="center" src="' . url('uploadsAmend/', [$row->image]) . '" alt=""/></a></div> ';
                        } else {
                            $btn = 'N/A';
                        }
                        return $btn;
                    })
                    ->addColumn('status', function ($row) {
                        if ($row->status == '1') {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }
                        $btn = '
                        <label class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" 
                          onClick="statusAmend(\'' . $row->id . '\')" ' . $checked . '>
                           </label>';
                        return $btn;
                    })
                    ->addIndexColumn()
                    ->rawColumns(['action', 'image', 'status'])
                    ->make(true);
            }
            return redirect('category');
        }
    }

    // edit amendment //
    public function editAmendment($id)
    {
        $data['title']='Amendment';
        $data['edit_amendment'] = amendment::where('id', $id)->first();
        return view('admin.amendment', $data);
    }

    // delete amendment //
    public function deleteAmendment($id)
    {
        $user = amendment::find($id);
        $data = $user->image;
        $file_path = public_path('uploadsAmend/' . $data);
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        amendment::where('id', $id)->delete($file_path);
        return redirect('amendment')->with('success', 'Amendment deleted successfully');
    }

    // amendment update //
    public function updateAmendment(Request $request)
    {
        $id = $request->id;
        $user['name'] = $request->input('name');
        $user['designation'] = $request->input('designation');
        $user['date'] = $request->input('date');
        $user['description'] = $request->input('description');

        $amend = amendment::find($id);
        if ($request->hasFile('imageS')) {
            $file_path = public_path('uploadss/' . $amend->image);
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $name = $request->file('imageS')->getClientOriginalName();
            $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
            $request->file('imageS')->move(public_path('uploadsAmend/'), $filename);
            $user['image'] = $filename;
        }
        amendment::where('id', $id)->update($user);
        return redirect('amendment')->with('success', 'Amendment Updated successfully');
    }

    // amendment status //
    public function statusAmendment($id)
    {
        $data = amendment::select('status')->where('id', $id)->first();
        if ($data->status == '1') {
            $user['status'] = '0';
        } else {
            $user['status'] = '1';
        }
        amendment::where('id', $id)->update($user);
    }
}
