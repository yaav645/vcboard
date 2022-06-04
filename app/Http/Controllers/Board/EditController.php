<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Models\Board;

class EditController extends Controller
{

    public function __invoke(Board $board)
    {
        return view('board.edit', compact('board'));
    }
}
