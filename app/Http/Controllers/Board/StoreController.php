<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use App\Http\Requests\Board\StoreRequest;
use App\Models\Board;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data=$request->validated();
        Board::firstOrCreate($data);
        return redirect()->route('board.index');
    }
}
