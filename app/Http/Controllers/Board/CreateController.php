<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{

    public function __invoke()
    {
        return view('board.create');
    }
}
