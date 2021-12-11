<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    //--------------------------------
    public function login_page()
    {
    	return view('admin_login');
    }
    public function register_page()
    {
        return view('admin_register');
    }
    public function password_page()
    {
        return view('admin_password');
    }
    public function tables_page()
    {
        return view('admin_tables');
    }
    public function charts_page()
    {
        return view('admin_charts');
    }
    //--------------------------------
    public function admin_index()
    {
    	return view('admin.home_admin');
    }
    public function admin_home(Request $request)
    {
        $email = $request -> admin_email;
        $pass = $request -> admin_password;
        
        $result = DB::table('tbl_admin') -> where('admin_email',$email) -> where('admin_password',$pass) -> first();

        if($result)
        {
            Session::put('ad_email',$request -> admin_email);           
            return Redirect::to('admin');
        }
        else
        {
            Session::put('message','Bạn nhập sai Username hoặc password');
            return Redirect::to('admin/login');
        }
    }
    public function logout_page()
    {
        Session::put('ad_email',null);        
        return Redirect::to('admin');
    }
}
