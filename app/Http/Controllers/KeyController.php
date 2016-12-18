<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Key;

class KeyController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keys = Key::all();
        return view('home')->with(compact('keys'));
    }
}
