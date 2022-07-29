<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUser extends Controller
{
    

    // request type parameter  (Request $req)

    function LogingView(Request $req){

        $req->validate([
            'username'=> 'required | max:10',
            'password'=>'required | min :5 '
        ]);
            return $req->input();
            // return "form data will be here";
    }
    
}
