<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
     public function logout(){
        Auth::guard('web')->logout();
        return redirect()->back();
    }

     public function dashboard(){
         $user=DB::table('users')->orderBy('id','DESC')->get()->first();  
    	return view('cd-admin.home.home',compact('user'));
    }


}
