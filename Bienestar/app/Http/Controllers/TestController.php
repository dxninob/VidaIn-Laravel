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

    public function save(Request $request){

        $module1 = Question::where('module', 1)->get('id');
        $module1Length = count($module1);
        $scoreModule1 = 0;
        for ($i = 0; $i < $module1Length; $i++){
            $scoreModule1 += request(strval($module1[$i]->id));
        }
        
        $module2 = Question::where('module', 2)->get('id');
        $module2Length = count($module2);
        $scoreModule2 = 0;
        for ($i = 0; $i < $module2Length; $i++){
            $scoreModule2 += request(strval($module2[$i]->id));
        }
        
        $module3 = Question::where('module', 3)->get('id');
        $module3Length = count($module3);
        $scoreModule3 = 0;
        for ($i = 0; $i < $module3Length; $i++){
            $scoreModule3 += request(strval($module3[$i]->id));
        }

        $module4 = Question::where('module', 4)->get('id');
        $module4Length = count($module4);
        $scoreModule4 = 0;
        for ($i = 0; $i < $module4Length; $i++){
            $scoreModule4 += request(strval($module4[$i]->id));
        }

        $module5 = Question::where('module', 5)->get('id');
        $module5Length = count($module5);
        $scoreModule5 = 0;
        for ($i = 0; $i < $module5Length; $i++){
            $scoreModule5 += request(strval($module5[$i]->id));
        }

        $scoreArray[0] = $scoreModule1;
        $scoreArray[1] = $scoreModule2;
        $scoreArray[2] = $scoreModule3;
        $scoreArray[3] = $scoreModule4;
        $scoreArray[4] = $scoreModule5;
        
        $modules = Module::all();
        $cont = 0;
        foreach($modules as $module) {
        
            $usermod = new UserMod();
            $usermod->module_id = $module->id;
            $usermod->user_id = Auth::id();
            $usermod->score = $scoreArray[$cont];
            $usermod->save();
            $cont++;
        }
        return redirect('/test/graphics');        
    }

    public function graphics()
    {
        $scores = [];
        $datos = UserMod::where('user_id', Auth::id())->get();
        foreach($datos as $dato) {
            array_push($scores, $dato->score);
        }

        $viewData = [];
        $totals = [30,30,30,40,65];
        for ($i = 0; $i < 5; $i++) {
            $p = $scores[$i]/$totals[$i];
            array_push($viewData, $p*100);
        }
        return view('test.graphics')->with("viewData", $viewData);
    }

}