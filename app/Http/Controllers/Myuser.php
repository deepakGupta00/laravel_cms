<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Myuser extends Controller
{
    function MyView(){
         return view('myuser', ['user'=>'deepak']);



    }

    // function Logingview(Request $req){
    //     return $req->input();
    // }


}
