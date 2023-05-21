<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    //
    public function index() {

    	return view('login');
    }

    public function store(Request $request) {


    	$user = DB::table('accounts')->where('email', $request->email)->where('password', $request->password)->first();
    	if($user != null) {

    		$save_session = $user;

    		session()->put('user_session', $save_session);

    		return redirect('/dashboard_user');
    	}
    	else {
    		return redirect()->back()->with('error', 'Username & password failed!');
    	}
    }

    public function login_page_admin() {
        return view('login-admin');
    }

    public function login_admin(Request $request) {
        $user = DB::table('accounts_admin')->where('email', $request->email)->where('password', $request->password)->first();
        if($user != null) {

            $save_session = $user;

            session()->put('admin_session', $save_session);

            return redirect('/dashboard_admin');
        }
        else {
            return redirect()->back()->with('error', 'Username & password admin failed!');
        }
    }

    public function dashboard_admin() {

        /*
        if(session()->get('admin_session') == null ) {
            return redirect('/login-admin')->with('error', 'You have no session admin!');
        }

        $profile DB::table('accounts_admin')->where('id', session()->get('admin_session')->id)->first();
        */
        $users = DB::table('accounts')->paginate(10);
        return view('dashboard-admin', compact('users'));
    }

    public function profile_users($id) {

        $user = DB::table('accounts')->where('id', $id)->first();
        dd($user);
    }

    public function dashboard_user() {

    	if(session()->get('user_session') == null) {

    		return redirect('/login')->with('error', 'Your have no session user!');
    	}
        $profile = DB::table('accounts')->where('id', session()->get('user_session')->id)->first();

    	return view('dashboard-user', compact('profile'));
    }

    public function logout_user() {

    	session()->forget('user_session');

    	return redirect('/login');
    }

    public function logout_admin() {
        session()->forget('admin_session');

        return redirect('/login-admin');
    }

    public function api_profile($id) {

        $user = DB::table('accounts')->select('id','first_name','last_name','number_ident','email','address','city','province','zip_code','country')->where('id', $id)->get();

        if($id == 666) {
            return response()->json(['success' => 'Success', 'data' => $user, 'flag' => 'cydef{ini_flag}'], 200);
        }

        return response()->json(['success' => 'Success', 'data' => $user], 200);
    }
}
