<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;

class AuthController extends Controller
{


    public function register() {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => 'Validation failed', 'errors' => $validator->errors()], 400);
        }
    
        $user = new User;
        $user->name = request()->name;
        $user->email = request()->email;
        $user->user_type = 2;
        $user->password = bcrypt(request()->password);
        $user->save();
    
        if (! $token = auth('api')->attempt(['email' => $user->email, 'password' => request()->password])) {
            return response()->json(['error' => 'Token generation failed'], 500);
        }
    
        $responseData = [
            'token' => $token,
            'user' => $user,
        ];
    
        return response()->json($responseData, 200);

    }//end of function
    

    public function login(){

        $credentials = request(['email', 'password']);
       
        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Invalid Credential'], 401);
        }
    
 
        return $this->respondWithToken($token);

    }//End of function

    public function me()
    {
        return response()->json(auth('api')->user());

    }//End of function

    public function logout()
    {
        
        auth('api')->logout();
 
        return response()->json(['message' => 'Successfully logged out']);

    }//End of function

    public function refresh(){

        return $this->respondWithToken(auth('api')->refresh());

    }//end of function

    protected function respondWithToken($token){

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL()* 720,
            'user' => auth('api')->user(),
        ]);

    }//End of function
    
    

}//End of Class
