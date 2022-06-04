<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Http\Requests\Board\UpdateRequest;
use App\Models\Board;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Board $board)
    {
        $data=$request->validated();
        $board->update($data);

        return redirect()->route('board.index');

    }
}
