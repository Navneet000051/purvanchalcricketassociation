<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

use function Ramsey\Uuid\v1;

class UnitController extends Controller
{
    public function index()
    {
        $data['title'] = 'Unit';
        $data['edit_unit'] = '';
        return view('admin.unit', $data);
    }

    public function add_unit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'secretary' => 'required',
            // 'mobileno' => 'required',
            // 'president' => 'required',
            // 'president_mobile' => 'required',
            'district' => 'required',
        ]);
        $data = new Unit();
        $data['name'] = $request->input('name');
        $data['secretary'] = $request->input('secretary');
        $data['mobileno'] = $request->input('mobileno');
        $data['president'] = $request->input('president');
        $data['president_mobile'] = $request->input('president_mobile');
        $data['district'] = $request->input('district');
        $data->save();
        return redirect('unit')->with('success', 'Unit added successfully');
    }

    public function show_unit(Request $request)
    {
        if ($request->ajax()) {
            $data = Unit::select('id', 'name', 'secretary', 'mobileno', 'president', 'president_mobile', 'district', 'status')->orderBy('id', 'desc')->get();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a href="edit_unit' . $row->id . '" ><i class="fa fa-edit" style="font-size:20px;color:#414189; margin:1rem"></i></a>';
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

    public function edit_unit($id)
    {
        $data['title'] = '';
        $data['edit_unit'] = Unit::where('id', $id)->first();
        return view('admin.unit', $data);
    }

    public function updateUnit(Request $request)
    {
        $id = $request->id;
        $data['name'] = $request->input('name');
        $data['mobileno'] = $request->input('mobileno');
        $data['president'] = $request->input('president');
        $data['president_mobile'] = $request->input('president_mobile');
        $data['secretary'] = $request->input('secretary');
        $data['district'] = $request->input('district');

        Unit::where('id', $id)->update($data);
        return redirect('unit')->with('success', 'Unit updated successfully');
    }

    public function deleteUnit($id)
    {
        Unit::where('id', $id)->delete();
        return redirect('unit')->with('success', 'Unit deleted successfully');
    }

    public function Unitstatus($id)
    {
        $unit = Unit::select('status')->where('id', $id)->first();

        if ($unit->status == 1) {
            $data['status'] = 0;
        } else {
            $data['status'] = 1;
        }
        Unit::where('id', $id)->update($data);
    }
}
