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
    public function index()
    {
        $rings = Ring::all();
        return view('home')->with(compact('rings'));
    }

    /** [show 擂台页] */
    public function show($id)
    {
        $ring = Ring::findOrFail($id);
        $levels = $ring->levels;
        dd($ring);
        return view('ring')->with(compact('ring','levels'));
    }
}
