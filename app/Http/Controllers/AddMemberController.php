<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class AddMemberController extends Controller
{
    function AddData(Request $req){
        // return "from controller";


        // data add in database here
        // save data in table

        $member=new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;

        $member->save();

        return redirect('add');

    }
}


