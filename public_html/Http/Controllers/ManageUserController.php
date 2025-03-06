<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\manage;

class ManageUserController extends Controller
{
    //** User Record show  */
    public function index()
    {
        $data['title'] = 'ManageUser';

        $data['manages'] = manage::leftJoin('states', 'states.id', '=', 'manages.state')->leftjoin('cities', 'cities.id', '=', 'manages.city')->select(
            'states.name as state_name',
            'manages.id as manage_id',
            'cities.name as city_name',
            'manages.name  as manage_name',
            'manages.mobile as manage_mobile',
            'manages.email as manage_email',
            'manages.address as manage_address',
            'manages.mothername as manage_mothername',
            'manages.fathername as manage_fathername',
            'manages.pincode as manage_pincode',
            'manages.adhaar as manage_adhaar',
            'manages.pancard as manage_pancard',
            'manages.image as manage_image',
        )->get();

        return view('admin.user', $data);
    }

    //** User add  show  */
    public function Adduser()
    {

        $user['title'] = 'ManageUser';
        $user['states'] = State::where('country_id', '101')->get();
        $user['edit_user'] = '';
        return view('admin.user_form', $user);
    }

    //** User insert   data */
    public function insertUser(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:manages|',
            'mobile' => 'required|max:10|min:10|unique:manages|',
            'mothername' => 'required|',
            'fathername' => 'required|',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|min:6|max:6|',
            'adhaar' => 'required|min:12|max:12|unique:manages|',
            'adhaar_upload' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
            'pancard' => 'required|unique:manages|',
            'pancard_upload' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $user = new manage();


        if ($request->hasFile('image')) {

            $name = $request->file('image')->getClientOriginalName();
            $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
            $request->file('image')->move(public_path('uploadskd'), $filename);
            $user['image'] = $filename;
        }

        if ($request->hasFile('pancard_upload')) {
            $name = $request->file('pancard_upload')->getClientOriginalName();
            $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
            $request->file('pancard_upload')->move(public_path('uploadskd'), $filename);
            $user['pancard_upload'] = $filename;
        }

        if ($request->hasFile('adhaar_upload')) {
            $name = $request->file('adhaar_upload')->getClientOriginalName();
            $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
            $request->file('adhaar_upload')->move(public_path('uploadskd'), $filename);
            $user['adhaar_upload'] = $filename;
        }
        $user['name'] = $request->input('name');
        $user['email'] = $request->input('email');
        $user['mobile'] = $request->input('mobile');
        $user['address'] = $request->input('address');
        $user['mothername'] = $request->input('mothername');
        $user['fathername'] = $request->input('fathername');
        $user['state'] = $request->state;
        $user['city'] = $request->city;
        $user['adhaar'] = $request->input('adhaar');
        $user['pancard'] = $request->input('pancard');
        $user['pincode'] = $request->input('pincode');
        $user['name'] = $request->input('name');
        $user['email'] = $request->input('email');
        $user['mobile'] = $request->input('mobile');
        $user['address'] = $request->input('address');
        $user['mothername'] = $request->input('mothername');
        $user['fathername'] = $request->input('fathername');
        $user['state'] = $request->state;
        $user['city'] = $request->city;
        $user['adhaar'] = $request->input('adhaar');
        $user['pancard'] = $request->input('pancard');
        $user['pincode'] = $request->input('pincode');
        $user->save();
        return redirect('User')->with('success', 'User added successfully');
    }

    //** User edit  show */
    public function EditUser(Request $request)
    {

        $id = $request->id;
        $user['edit_user'] = manage::where('id', $id)->first();
        // dd($user);
        $user['city_edit'] =  City::where('state_id', $user['edit_user']->state)->get();
        $user['title'] = 'ManageUser';
        $user['states'] = State::get();
        return view('admin.user_form', $user);
    }

    //** User update data */
    public function updateUser(Request $request)
    {
        $id = $request->id;
        $user['name'] = $request->input('name');
        $user['email'] = $request->input('email');
        $user['mobile'] = $request->input('mobile');
        $user['address'] = $request->input('address');
        $user['mothername'] = $request->input('mothername');
        $user['fathername'] = $request->input('fathername');
        $user['state'] = $request->state;
        $user['city'] = $request->city;
        $user['adhaar'] = $request->input('adhaar');
        $user['pancard'] = $request->input('pancard');
        $user['pincode'] = $request->input('pincode');

        $email = $request->email;
        $mobile = $request->mobile;
        $adhaar = $request->adhaar;
        $pancard = $request->pancard;
        $match_email = manage::where('email', $email)->where('id', "!=", $id)->first();
        $match_mobile = manage::where('mobile', $mobile)->where('id', "!=", $id)->first();
        $match_pancard = manage::where('pancard', $pancard)->where('id', "!=", $id)->first();
        $match_adhaar = manage::where('adhaar', $adhaar)->where('id', "!=", $id)->first();

        if ($match_email) {

            return redirect()->back()->with('error', 'Email Id already exist');
        } else if ($match_mobile) {

            return redirect()->back()->with('error', 'Mobile No already exist');
        } else if ($match_pancard) {

            return redirect()->back()->with('error', 'Pan No already exist');
        } else if ($match_adhaar) {

            return redirect()->back()->with('error', 'Adhaar No already exist');
        } else {


            if ($request->hasFile('image')) {
                $name = $request->file('image')->getClientOriginalName();
                $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
                $request->file('image')->move(public_path('uploadskd'), $filename);
                $user['image'] = $filename;
                $res = manage::where('id', $id)->update($user);
                if ($res) {
                    return redirect('User');
                }
            }
            if ($request->hasFile('pancard_upload')) {
                $name = $request->file('pancard_upload')->getClientOriginalName();
                $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
                $request->file('pancard_upload')->move(public_path('uploadskd'), $filename);
                $user['pancard_upload'] = $filename;
                $res = manage::where('id', $id)->update($user);
                if ($res) {
                    return redirect('User');
                }
            }
            if ($request->hasFile('adhaar_upload')) {
                $name = $request->file('adhaar_upload')->getClientOriginalName();
                $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
                $request->file('adhaar_upload')->move(public_path('uploadskd'), $filename);
                $user['adhaar_upload'] = $filename;
                $res = manage::where('id', $id)->update($user);
                if ($res) {
                    return redirect('User');
                }
            }

            manage::where('id', $id)->update($user);
            return redirect('User')->with('success', 'User updated successfully');
        }
    }

    //** User delete  */
    public function deleteUser($id)
    {

        manage::where('id', $id)->delete();
        return redirect('User')->with('success', 'User deleted successfully');
    }

    //** get  city  */
    public function get_city(Request $request)
    {
        $state = $request->state_id;
        $city = City::where('state_id', $state)->get();

        if ($city) {
            return ['status_code' => 200, 'data' => $city];
        } else {
            return ['status_code' => 401, 'message' => 'Something went wrong '];
        }
    }
}
