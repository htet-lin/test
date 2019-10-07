<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
     public function departments()
    {
        $Departments = Department::all();
        return view('department.departments')->with('Departments', $Departments);
    }
}
