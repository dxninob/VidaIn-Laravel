<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserActivity;
use App\Models\Activity;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ActivityController extends Controller
{

    public function index()
    {
        $viewData = [];

        $doneActivitiesRecords = UserActivity::where('user_id', Auth::id())->get('activity_id');
        $doneActivities = [];
        foreach ($doneActivitiesRecords as $activity) {
            array_push($doneActivities, $activity->activity_id);
        }

        $activities = Activity::whereNotIn('id', $doneActivities)->get()->random(3);
        $viewData['activities'] = $activities;
        return view('activity.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $activity = Activity::findOrFail($id);
        $viewData["activity"] = $activity;


        return view('activity.show')->with("viewData", $viewData);



        // $min_score = DB::table('user_module')->where('user_id', Auth::id())->min('score');
        // $module = DB::table('user_module')->where('score', $min_score)->first();
        // $module_id = $module->id;

        // $activities = DB::table('activity_module')->where('module_id', $module_id)->pluck('activity_id')->toArray();
        // $act = -1;
        // foreach($activities as $activity_id) {
        //     $done = DB::table('user_activity')->where('activity_id', $activity_id)->value('done');
        //     if ($done == 1) {
        //         continue;
        //     } elseif ($done == 2) {
        //         continue;
        //     } else {
        //         $act = $activity_id;
        //         break; 
        //     }
        // }

        // $activity = Activity::findOrFail($act);
        // $viewData = [];
        // $viewData["activity"] = $activity;
        // $viewData["module"] = $module;
        // return view('activities.show')->with("viewData", $viewData);
    }

    public function save(Request $request, $id)
    {
        $status = $request->get('status');
        if ($status == '1') {
            $data = array('user_id' => Auth::id(), "activity_id" => $id, "done" => 1);
            DB::table('user_activity')->insert($data);
        } elseif ($status == '2') {
            $data = array('user_id' => Auth::id(), "activity_id" => $id, "done" => 2);
            DB::table('user_activity')->insert($data);
        }
        return redirect('/activities');
    }
}
