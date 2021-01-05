<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\login;
use App\User;
use Redirect;

class loginController extends Controller
{
    public function index(Request $req)
    {
     return view('login');
    }
    public function action(Request $req)
        {
            $user = DB::table('login')
                        ->where('username', $req->uname)
                        ->where('password', $req->password)
                        ->where('role', $req->usertype)
                        ->first();
                        

                        
    
                        if($user != null){
                            
                            $req->session()->put('uname', $req->uname);
                            $req->session()->put('role', $req->usertype);
                           
                            // $role = $user->role;
                            return redirect()->route('admin');
                            // return view('employee.index', ['user'=>$user]);
                            // Redirect::to('employee.index'. $role);

                        }
                        else{
                            $req->session()->flash('msg', 'invalid username or password');
                            return redirect()->route('login');

                        }
                        
    }
}
