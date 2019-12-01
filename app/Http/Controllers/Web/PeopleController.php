<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
    public function store()

    {
        $experience = Experience::firstOrNew([
            'user_id' => auth()->id()
        ]);
        // dd($fields);

        $experience->without_experience = $request->has('without_experience');
        $experience->company = $request->input('company');
        $experience->market = $request->input('market');
        $experience->position_level = $request->input('position_level');
        $experience->experience_start_date = $request->input('experience_start_date');
        $experience->experience_end_date = $request->input('experience_end_date');
        $experience->currently_working = $request->has('currently_working');
        $experience->job_description = $request->input('job_description');

        $experience->user_id = auth()->id();
        $experience->save(); // UPDATE, INSERT depending if it already exists or not

        $show = 'experience';
        $notification = 'Tu experiencia laboral se ha registrado correctamente.';

        return back()->with(compact('notification', 'show'));
    }
}
