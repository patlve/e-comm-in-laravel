<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
       
        $user = User::where(['email' => $req->email])->first();
        // dd($user);
        //return $user->password;
        
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }  
    }
    function register(Request $req)
    {
        // return $req->input();
        //instance of user model
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
