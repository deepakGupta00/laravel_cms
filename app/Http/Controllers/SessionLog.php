<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionLog extends Controller
{
        function SessionLogin(Request $req){
 // *************** show user input data on your website   
            // return $req->input();      <- THIS KEYWORD
            $data= $req->input();
            $req->session()->put('user', $data['username']);
            // echo session('user');

            return redirect('profile');
            // return "session fron controller";
        }
}
