<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller{

    public function index(){

        $data['title'] = "Dashboard";
        return view('admin.dashboard',$data);

    }//end of function


}//End of Class
