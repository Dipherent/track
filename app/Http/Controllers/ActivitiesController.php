<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivitiesController extends Controller

{

  public function submit(Request $request){

        $this->validate($request, [
          'sport'=>'required',
          'food'=>'required',
          'notes'=>'required'

        ]);

        //create Activity

    $activity = new Activity;
    $activity->date = $request->input('date');
    $activity->sport = $request->input('sport');
    $activity->food = $request->input('food');
    $activity->notes = $request->input('notes');

    $activity->save();

    return redirect('/view')->with('success', 'Activity has been added! Thank you');;


  }

  public function getActivities(){

      $activities = Activity::all();


      return view('view')->with('activities',$activities);
    }


}
