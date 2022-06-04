<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Http\Requests\Department\StoreRequest;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data=$request->validated();
        Department::firstOrCreate($data);
        return redirect()->route('department.index');
    }
}
