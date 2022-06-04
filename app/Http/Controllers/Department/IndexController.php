<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class IndexController extends Controller
{

    public function __invoke()
    {
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }
}
