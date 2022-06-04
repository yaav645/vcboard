<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DeleteController extends Controller
{

    public function __invoke(Department $department)
    {
        $department->delete();


        return redirect()->route('department.index');
    }
}
