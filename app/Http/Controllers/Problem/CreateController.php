<?php

namespace App\Http\Controllers\Problem;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{

    public function __invoke()
    {
        return view('problem.create');
    }
}
