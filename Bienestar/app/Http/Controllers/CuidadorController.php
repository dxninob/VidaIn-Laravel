<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Activity;

class CuidadorController extends Controller
{

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
        return view('cuidador.activities')->with("viewData", $viewData);
    }

    public function inicio()
    {
        return view('cuidador.inicio');
    }
}