<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Models\Board;

class IndexController extends Controller
{

    public function __invoke()
    {
        $boards = Board::all();

        return view('board.index', compact('boards'));
    }
}
