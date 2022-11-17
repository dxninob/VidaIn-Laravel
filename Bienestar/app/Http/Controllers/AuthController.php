<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerPatient()
    {
        return view('register.patient');
    }

    public function registerDoctor()
    {
        return view('register.doctor');
    }

    public function registerCuidador()
    {
        return view('register.cuidador');
    }
}