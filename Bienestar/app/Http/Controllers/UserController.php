<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(Request $request)
    // {
    //     $document = $request->get('buscarpor');
    //     $order = $request->get('order');
    //     $users = [];
    //     $order_query = '';

    //     if ($document) {
    //         $users = User::where('document', $document)->paginate(100);
    //     } else {
    //         if ($order == '1') {
    //             $order_query = 'asc';
    //         } elseif ($order == '0') {
    //             $order_query = 'desc';
    //         } else {
    //             $order_query = 'asc';
    //         }
        
    //         $users_id = DB::table('users')->where('role', 'patient')->orderBy('name', $order_query)->orderBy('lastname', $order_query)->pluck('id')->toArray();   
    //         foreach($users_id as $user_id) {
    //             $user = User::findOrFail($user_id);
    //             array_push($users, $user);
    //         }
    //     }

    //     $viewData = [];
    //     $viewData['users'] = $users;
    //     return view('doctor.user.index')->with("viewData", $viewData);
    // }
    
    // public function show($id) {
    //     $viewData = [];
    //     $user = User::findOrFail($id);
    //     $viewData["user"] = $user;


    //     $scores = [];
    //     $datos = UserModule::where('user_id', $user->id)->get();
    //     foreach($datos as $dato) {
    //         array_push($scores, $dato->score);
    //     }
    //     $pScores = [];
    //     $totals = [30,30,30,40,65];
    //     for ($i = 0; $i < 5; $i++) {
    //         $p = $scores[$i]/$totals[$i];
    //         array_push($pScores, $p*100);
    //     }
    //     $viewData['scores'] = $pScores;

    //     return view('doctor.user.show')->with("viewData", $viewData);
    // }
}