<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient.inicio.index');
    }

    public function video()
    {
        return view('patient.inicio.video');
    }

    public function intensidad()
    {
        return view('patient.inicio.intensidad');
    }
}