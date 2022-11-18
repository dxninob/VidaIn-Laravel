<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserActivity;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index() {
        $viewData = [];

        $doneActivitiesRecords = UserActivity::where('user_id', Auth::id())->get('activity_id');
        $doneActivities = [];
        foreach ($doneActivitiesRecords as $activity) {
            array_push($doneActivities, $activity->activity_id);
        }

        $activities = Activity::whereNotIn('id', $doneActivities)->get()->random(3);
        $viewData['activities'] = $activities;
        return view('patient.actividades.index')->with("viewData", $viewData);
    }

    public function calendario()
    {
        return view('patient.actividades.calendario');
    }

    public function show($id)
    {
        $viewData = [];
        $activity = Activity::findOrFail($id);
        $viewData["activity"] = $activity;

        return view('patient.actividades.show')->with("viewData", $viewData);
    }

    public function save(Request $request, $id)
    {
        $status = $request->get('status');
        if ($status == '1') {
            $data = array('user_id'=>Auth::id(), "activity_id"=>$id,"done"=>1);
            DB::table('user_activity')->insert($data);
        } elseif ($status == '2') {
            $data = array('user_id'=>Auth::id(), "activity_id"=>$id,"done"=>2);
            DB::table('user_activity')->insert($data);
        }
        return view('patient.actividades.index');
    }
}