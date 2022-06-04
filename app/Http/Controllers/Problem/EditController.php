<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;
use App\Models\Problem;

class EditController extends Controller
{

    public function __invoke(Problem $problem)
    {
        return view('problem.edit', compact('problem'));
    }
}
