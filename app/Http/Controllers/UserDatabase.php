<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;


class UserDatabase extends Controller
{
    function Userdata(){
        // echo "Hello from controller";

        
        // connect dataase hare 

        return DB::select("select * from user");
    }
}
