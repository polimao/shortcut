<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShortCut;

class HomeController extends Controller
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
        $shortCut = ShortCut::find();
        return view('home');
    }
}
