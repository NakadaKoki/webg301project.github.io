<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Product;
use App\Models\Category;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function loginad()
    {
        return view('loginad');
    }
    public function indexad()
    {
        if(Session::get('loginID') !=null){
            $admin = Admin::get();
            return view('/indexad', compact('admin'));
        }else{
            return redirect('loginad')->with('restricted', 'You must login with role admin');
        }
       
    }
    public function login(Request $request)
    {
        $request->validate([
            'adminName'=>'required',
            'password'=>'required'
        ]);
        $admin = Admin::where('adminName', '=', $request->adminName)->first();
       
        if($admin){
            if($request->password == $admin->password){
                    
                $request->session()->put('loginID', $admin->adminID);  
                $request->session()->put('loginName', $admin->adminName); 
                return redirect('indexad')->with(['adminName'=>$admin->adminName]);
            }
            else{
                return back()->with('fail', 'Incorrect password');
            }
        }else{
            return back()->with('fail', 'Incorrect username');
        }
    }
    public function logout()
        {   
            if(Session::get('loginID')){
                Session::pull('loginID');
                return redirect('/indexad');
            }
        }
    
}
