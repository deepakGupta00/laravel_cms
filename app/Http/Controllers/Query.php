<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Query extends Controller
{
    function dbQuery(){ 

// find and where 
        // return (array)DB::table('members')->find(5);
        // ->where('address' , 'noida')
        // ->get();


// insert data in database

        // return DB::table('members')
        // ->insert(
        //     [
        //         'name'=>'ramu',
        //         'email'=>'ramu@gmail.com',
        //         'address'=>'sangam vihar'
        //     ]
        //     );


// update data
        // return DB::table('members')
        // ->where('id',7)
        // ->update(
        //     [
        //         'name'=>'ramu',
        //         'email'=>'ramu@gmail.com',
        //         'address'=>'USA'
        //     ]
        //     );



// delete data from database

        return DB::table('members')
        ->where('id', 8)->delete();

    }
}
