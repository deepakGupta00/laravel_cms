<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Member;



class MemmberController extends Controller
{
    function Show(){
        // return  view('list');


        // fetch data from database here

    //    $data=  Member::all();
    //    pagination 
    $data=Member::paginate(2);



       return view('list', ['members'=>$data]);
    }
}
