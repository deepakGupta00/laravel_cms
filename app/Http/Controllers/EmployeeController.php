<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class EmployeeController extends Controller
{
    function ShowEmployee(){
        return DB::table('employee')
        ->join('company', 'employee.id',"=",'company.employee_id')
        ->get();
    }
}
