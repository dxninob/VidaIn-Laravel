<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // public function selectUser()
    // {
    //     return view('home.selectUser');
    // }

    // public function watchVideo()
    // {
    //     return view('home.watchVideo');
    // }

    public function index()
    {
        return view('index');
    }

    public function user()
    {
        return view('usuario');
    }

    public function letra()
    {
        return view('letra');
    }

}