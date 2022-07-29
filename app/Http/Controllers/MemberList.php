<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mymember;

class MemberList extends Controller
{
    function List(){
        // return "from controller";
        $data=mymember::all();

        return view('listmember', ['mymembers'=>$data]);

    }
    function Delete($id){
        $data=mymember::find($id);
        $data->delete();
        return redirect('listmember');

    }
    function Edit($id){
        
        $data= mymember::find($id);
        return view('edit', ['data'=>$data]);

    }
    function Update(Request $req){
        $data=mymember::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();

        return redirect('listmember');


    }

    function Add(){
        // return "from add controller";
        return view('addmember');
       

    }

    function AddUpdate(Request $req){
        $member=new mymember;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;

        $member->save();
        return redirect('listmember');

    }
   
    
}

