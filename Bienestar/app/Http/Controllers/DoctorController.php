<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $document = $request->get('buscarpor');
        $order = $request->get('order');
        $users = [];
        $order_query = '';

        if ($document) {
            $users = User::where('document', $document)->paginate(100);
        } else {
            if ($order == '1') {
                $order_query = 'asc';
            } elseif ($order == '0') {
                $order_query = 'desc';
            } else {
                $order_query = 'asc';
            }
        
            $users_id = DB::table('users')->where('role', 'patient')->orderBy('name', $order_query)->orderBy('lastname', $order_query)->pluck('id')->toArray();   
            foreach($users_id as $user_id) {
                $user = User::findOrFail($user_id);
                array_push($users, $user);
            }
        }

        $viewData = [];
        $viewData['users'] = $users;
        return view('doctor.index')->with("viewData", $viewData);
    }
    
    public function show($id) {
        $scores = [];
        $datos = UserModule::where('user_id', $id)->get();
        foreach ($datos as $dato) {
            array_push($scores, $dato->score);
        }

        $viewData = [];
        $totals = [30, 30, 30, 40, 65];
        for ($i = 0; $i < 5; $i++) {
            $p = $scores[$i] / $totals[$i] * 100;
            $p = (int) $p;
            array_push($viewData, $p);
        }
        $viewData["user"] = User::findOrFail($id);
        return view('doctor.show')->with("viewData", $viewData);
    }
}