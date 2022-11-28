<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Activity;
use App\Models\UserModule;
use Illuminate\Support\Facades\Auth;



class CuidadorController extends Controller
{
    public function index()
    {
        return view('cuidador.index');
    }

    public function activities($id)
    {
        $user = User::findOrFail($id);
        $activities= DB::table('user_activity')->where('user_id', $id)->pluck('activity_id')->toArray();
        $viewData = [];
        $activities_array = [];
        foreach($activities as $act) {
            $act_obj = Activity::findOrFail($act);
            array_push($activities_array, $act_obj);
        }
        $viewData["activities"] = $activities_array;
        return view('cuidador.actividades')->with("viewData", $viewData);
    }

    public function resultados()
    {
        $scores = [];
        $user_document = User::findOrFail(Auth::id())->documentPatient;
        $user = User::where('document', $user_document)->pluck('id')->first();
        $datos = UserModule::where('user_id', $user)->get();
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
        return view('cuidador.resultados')->with("viewData", $viewData);
    }
}