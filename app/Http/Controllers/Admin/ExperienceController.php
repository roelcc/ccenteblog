<?php

namespace App\Http\Controllers\Admin;

use App\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    public function store(Request $request)
    {
        $experience = Experience::firstOrNew([
            'user_id' => auth()->id()
        ]);
        // dd($fields);


        $experience->title = $request->input('title ');
        $experience->sub_title_1 = $request->input('sub_title_1 ');
        $experience->sub_title_2 = $request->input('sub_title_2 ');
        $experience->slug = $request->input('slug ');
        $experience->file = $request->input('file ');
        $experience->picture = $request->input('picture ');

        // Questions about us
        $experience->question_0 = $request->input('question_0');
        $experience->question_1 = $request->input('question_1');
        $experience->question_2 = $request->input('question_2');
        $experience->question_3 = $request->input('question_3');
        $experience->question_4 = $request->input('question_4');
        $experience->question_5 = $request->input('question_5');
        $experience->question_6 = $request->input('question_6');
        //metadata
        $experience->meta_title = $request->input('meta_title');
        $experience->meta_description = $request->input('meta_description');
        $experience->keywords = $request->input('keywords');

        $experience->user_id = auth()->id();
        $experience->save(); // UPDATE, INSERT depending if it already exists or not

        $show = 'experience';
        $notification = 'Tu experiencia laboral se ha registrado correctamente.';

        return back()->with(compact('notification', 'show'));
    }
}
