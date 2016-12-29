<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ring;

class RingController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rings = Ring::all();
        return \Response::json(compact('rings'))->setCallback($request->callback);
    }

    /** [show 擂台页] */
    public function show($id)
    {
        $ring = Ring::findOrFail($id);
        $levels = $ring->levels;
        dd($ring);
        return view('ring')->with(compact('ring','levels'));
    }

    public function getLevels(Request $request, $ring_id)
    {
        $ring = Ring::find($ring_id);
        $levels = $ring->levels;
        return \Response::json(compact('levels'))->setCallback($request->callback);
    }
}
