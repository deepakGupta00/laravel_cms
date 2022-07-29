<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Aggregate extends Controller
{
    function AggregateOparation(){
        return DB::table('members')->max('name');
    }
}
