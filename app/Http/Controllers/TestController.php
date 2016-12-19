<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Key;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(array('key' => 'value'));
        $keys = Key::all();
        return view('home')->with(compact('keys'));
    }
}
