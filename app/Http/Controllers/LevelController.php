<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Level;

class LevelController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::all();
        return view('level')->with(compact('levels'));
    }

    public function getKeys(Request $request, $level_id)
    {
        $level = Level::find($level_id);
        $keys = $level->keys;
        return \Response::json(['keys' => $keys])->setCallback($request->callback);
    }
}
