<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $user_id = Auth::id();
        $users = User::where('id', $user_id)->get('patients');
        $viewData["users"] = $users;
        return view('doctor.user.index')->with("viewData", $viewData);
    }
    
    public function show($id) {
        $viewData = [];
        $user = User::findOrFail($id);
        $viewData["user"] = $user;
        return view('doctor.user.show')->with("viewData", $viewData);
    }
}