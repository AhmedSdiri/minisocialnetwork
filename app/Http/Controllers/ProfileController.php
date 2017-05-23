<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ProfileController extends Controller
{
    public function profile($username)
    {
        
        //if the username matchs with the database
        
        $user = User::whereUsername($username)->first();
       // return $user;
        
        /*dump($user);
        dd($user->email);*/
        
        return view('user.profile');
    }
}
