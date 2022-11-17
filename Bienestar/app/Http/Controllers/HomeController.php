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

    public function emergencia(){
        return view('home.emergencia');
    }

    public function intensidad(){
        return view('home.intensidad');
    }

    public function video(){
        return view('home.video');
    }

    public function calendario(){
        return view('home.calendario');
    }

    public function navbar(){
        return view('home.navbar');
    }

    public function registro(){
        return view('home.registro');
    }

    public function planes(){
        return view('home.planes');
    }

    public function dominio(){
        return view('home.dominio');
    }
}