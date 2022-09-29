<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Module;
use App\Models\UserMod;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["questions"] = Question::all();
        return view('test.index')->with("viewData", $viewData);
    }

    public function save(Request $request)
    {
        $modules = Module::all();
        foreach($modules as $module) {
            $usermod = new UserMod();
            $usermod->module_id = $module->id;
            $usermod->user_id = Auth::id();
            $usermod->score = 0;
            $usermod->save();
        }

        $total = Question::all()->pluck('id');
        foreach($total as $i) {
            $pregunta = request(strval($i));
            $usermod_id = DB::table("usermod")->where('module_id', strval($i))->pluck('id')->first();
            $usermod = UserMod::all()->where('id', $usermod_id)->first();
            $usermod->score += intval($pregunta);
            $usermod->save();
        }
    }
}