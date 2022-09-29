<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Module;
use App\Models\UserMod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $viewData = [];
        $viewData["questions"] = Question::all();
        return view('test.index')->with("viewData", $viewData);
    }
}