<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class signups extends Controller
{
    //
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $check=User::where('email',$user->id)->first();
        if($check){
        	Auth::login($check);
        	return redirect('/fblogin');
        }
        else{
        	$data= new User;
        $data->name=$user->name;
        $data->email=$user->id;
        $data->password=bcrypt('123456');
        $data->save();

        Auth::login($data);
        	return redirect('/fblogin');
        }

        
    }
}
