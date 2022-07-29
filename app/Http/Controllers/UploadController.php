<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
{
    function UploadFile(Request $req){
        // return  "from controller ";

        // upload file here 
        // Storage::disk('local')->put('example.txt', 'Contents');

        // $request->file->getClientOriginalName();

        return $req->file('file')->store('docs');


 

    }
}
