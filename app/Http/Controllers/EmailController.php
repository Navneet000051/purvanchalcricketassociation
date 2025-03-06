<?php

namespace App\Http\Controllers;

use App\Models\ContactMail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EmailController extends Controller
{
    public function index()
    {
        return view('admin.email');
    }

    public function showEmail(Request $request)
    { {
            if ($request->ajax()) {
                $data = ContactMail::orderBy('id', 'DESC')->get();
                
                return DataTables::of($data)

                    ->addIndexColumn()
                    ->addColumn('name',function($row){
                    
                    $name = $row->firstname.' '.$row->lastname;
                    return $name;
            })
                    
                    ->rawColumns(['name'])
                    ->make(true);
            }
        }
    }
}
