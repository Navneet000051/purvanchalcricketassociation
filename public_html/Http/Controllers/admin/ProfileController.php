<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{

     public function index($tab = '')
    {
        //   echo $tab; die;
        $data['tab'] = $tab;
        $id = Auth::user()->id;
        $data['title'] = "Manage Profile";
        $data['user'] = User::where('id', $id)->first();

        return view('admin.profile', $data);
    } //end of function


    public function updateProfile(Request $request)
    {

        $id = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'mobile' => 'required'
        ]);

        if ($validator->passes()) {

            $formdata['name'] = $request->name;
            $formdata['email'] = $request->email;
            $formdata['mobile'] = $request->mobile;

            $res = User::where('id', $id)->update($formdata);

            if ($res) {
                return redirect('manage_profile/profile')->with('success', "Profile updated Successfully");
            } else {

                return redirect('manage_profile/profile')->with('error', "Invalid credentials");
            }
        }

        return ['message' => $validator->errors()->all(), 'status_code' => 301];
    } //end of function


    public function updatePassword(Request $request)
    {

        $id = Auth::user()->id;
        $validate = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required_with:new_password|same:new_password',
        ]);

        if (Hash::check($request->old_password, Auth()->user()->password)) {

            if (!Hash::check($request->new_password, Auth()->user()->password)) {
                $user = User::find(Auth()->id());
                $user->update([
                    'password' => bcrypt($request->new_password)
                ]);

                return redirect('manage_profile/change_password')->with("success", "Password changed successfully");
            }
            return redirect('manage_profile/change_password')->with("error", "Invalid credentialls");
        }
        return redirect('manage_profile/change_password')->with("error", "Old password does not match");
    }

    // change password //

    // public function changePassword(Request $request)
    // {

    //     $request->validate([
    //         'old_password' => 'required',
    //         'new_password' => 'required',
    //         'old_password' => 'required'
    //     ]);
    //     if (Hash::check($request->old_password, Auth()->user()->password)) {
    //         if (!Hash::check($request->new_password, Auth()->user()->password)) {
    //             $user = User::find(Auth()->id());
    //             $user->update([
    //                 'password' => bcrypt($request->new_password)
    //             ]);
    //             return redirect()->back()->with('success', 'Password updated successfully');
    //         }

    //         return redirect()->back()->with("error", "Invalid credentialls");
    //     }
    //     return redirect()->back()->with("error", "Old password does not match");
    // }

    //end of function



}//End of Class
