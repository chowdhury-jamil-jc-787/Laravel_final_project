<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(Request $req){

		// if($req->session()->has('uname')){
		// 	return view('employee.index');
		// }else{
        //     $req->session()->flash('msg','invalid request');
        //     return redirect('/login');
            
        // }
       $uname = $req->session()->get('uname');
       return view('admin');
        
  } 
}
