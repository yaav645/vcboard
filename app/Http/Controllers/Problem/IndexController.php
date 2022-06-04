<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use App\Models\Problem;

class IndexController extends Controller
{

    public function __invoke()
    {
        $problems=Problem::all();
        return view('problem.index', compact('problems'));
    }
}
