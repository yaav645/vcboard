<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Company;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data=$request->validated();
        Company::firstOrCreate($data);
        return redirect()->route('company.index');
    }
}
