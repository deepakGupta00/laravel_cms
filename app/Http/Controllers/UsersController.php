<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{


    // this is the way that how we can use the view and we can call it from controller
    function loadView($name){
        return view("users ", ['name'=>$name]);
    }
}
