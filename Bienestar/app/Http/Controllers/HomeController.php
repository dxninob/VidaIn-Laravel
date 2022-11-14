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
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "BienEstar";
        return view('home.index')->with("viewData", $viewData);
    }

    public function tamano(){
        return view('home.tamano');
    }

    public function prueba(){
        return view('home.prueba');
    }

    public function usuario(){
        return view('home.usuario');
    }
}