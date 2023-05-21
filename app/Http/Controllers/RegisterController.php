<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    //
    public function index() {
    	return view('register');
    }

    public function store(Request $request) {

    	$insert = DB::table("accounts")->insert([
        		'first_name' => $request->first_name,
        		'last_name' => $request->last_name,
        		'number_ident' => $request->number_ident,
        		'email' => $request->email,
        		'address' => $request->address,
        		'city' => $request->city,
        		'province' => $request->province,
        		'zip_code' => $request->zip_code,
        		'country' => $request->country,
        		'password' => $request->password
        	]);

    	if($insert) {

    		return redirect()->back()->with('success', 'Register Successfully!');
    	}

    	return redirect()->back()->with('error', 'Register failed!');

    }

    public function update(Request $request) {

        if($request->get('process') == "profile") {
            
            $update = DB::table('accounts')->where('id', session()->get('user_session')->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'number_ident' => $request->number_ident,
                'email' => $request->email,
                'address' => $request->address,
                'city' => $request->city,
                'province' => $request->province,
                'zip_code' => $request->zip_code,
                'country' => $request->country
            ]);
            
            if (!$update) {
                return redirect()->back()->with('error', 'Update profile failed!');
            }

            return redirect()->back()->with('success', 'Update profile Successfully!');
        }
        elseif ($request->get('process') == "password") {

            if($request->password != $request->confirm_password) {
                return redirect()->back()->with('error', "Password does not match!");
            }

            $update = DB::table('accounts')->where('id', session()->get('user_session')->id)->update([
                'password' => $request->password
            ]);
            
            if (!$update) {
                return redirect()->back()->with('error', 'Update password failed!');
            }

            return redirect()->back()->with('success', 'Update password Successfully!');
        }
    }
}
