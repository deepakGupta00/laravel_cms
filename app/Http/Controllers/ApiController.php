<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Http;
class ApiController extends Controller
{
    function ApiData(){
        // return "from api controller";

        
        $collection= Http::get("https://reqres.in/api/users?page=1");
        return view('apiuser', ['collection'=>$collection['data']]);


    }
}
