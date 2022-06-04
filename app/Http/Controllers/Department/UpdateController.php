<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\UpdateRequest;
use App\Models\Department;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Department $department)
    {
        $data=$request->validated();
        $department->update($data);

        return redirect()->route('department.index');

    }
}
