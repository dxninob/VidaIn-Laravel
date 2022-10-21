<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMod;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $viewData = [];
        $user_id = Auth::id();
        $users_id = DB::table('doc_pat')->where('doctor_id', $user_id)->pluck('patient_id')->toArray();
        $users = [];
        foreach($users_id as $user_id) {
            $user = User::findOrFail($user_id);
            array_push($users, $user);
        }
        $viewData['users'] = $users;
        return view('doctor.user.index')->with("viewData", $viewData);
    }
    
    public function show($id) {
        $viewData = [];
        $user = User::findOrFail($id);
        $viewData["user"] = $user;


        $scores = [];
        $datos = UserMod::where('user_id', $user->id)->get();
        foreach($datos as $dato) {
            array_push($scores, $dato->score);
        }
        $pScores = [];
        $totals = [30,30,30,40,65];
        for ($i = 0; $i < 5; $i++) {
            $p = $scores[$i]/$totals[$i];
            array_push($pScores, $p*100);
        }
        $viewData['scores'] = $pScores;

        return view('doctor.user.show')->with("viewData", $viewData);
    }
}