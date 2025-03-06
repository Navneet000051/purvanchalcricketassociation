<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Auth\SessionGuard;

class LoginController extends Controller{
   
    public function index(){
     
        return view('admin.login');

    }//end of function

    public function adminLogin(Request $request){

        $validator = Validator::make($request->all(), [
            'user_name' => 'required',
            'password' => 'required',
        ]);
    
        if ($validator->passes()) {
            $credentials = [
                'email' => $request->user_name,
                'password' => $request->password,
            ];
    
            if (Auth::attempt($credentials)) {
                return ['status_code' => 200, 'message' => 'Login Successfully'];
            } else {
                return ['status_code' => 201, 'message' => 'Invalid Credentials'];
            }
        }
    
        return response()->json(['message' => $validator->errors()->all(), 'status_code' => 301]);

    }//end of function


    public function logoutAdmin(Request $request) {
        Auth::logout();
        return redirect('/admin');
    }//end of function



}//End of Class
