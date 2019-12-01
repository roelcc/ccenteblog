<?php

namespace App\Http\Controllers\Admin;

use App\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
    {
        $about_us = AboutUs::where('user_id', auth()->id())
            ->firstOrNew([ 'user_id' => auth()->id() ]);
        return view('admin.abouts', compact('about_us'));
    }

   public function store(Request $request)
   {

       $about_us = AboutUs::firstOrNew([
           'user_id' => auth()->id()
       ]);

       $about_us->title = $request->input('title');
       $about_us->sub_title_1 = $request->input('sub_title_1');
       $about_us->sub_title_2 = $request->input('sub_title_2');
       $about_us->slug = $request->input('slug');
       $about_us->file = $request->input('file');
       $about_us->picture = $request->input('picture');


       // Questions about us
       $about_us->question_0 = $request->input('question_0');
       $about_us->question_1 = $request->input('question_1');
       $about_us->question_2 = $request->input('question_2');
       $about_us->question_3 = $request->input('question_3');
       $about_us->question_4 = $request->input('question_4');
       $about_us->question_5 = $request->input('question_5');
       $about_us->question_6 = $request->input('question_6');
       //metadata
       $about_us->meta_title = $request->input('meta_title ');
       $about_us->meta_description = $request->input('meta_description ');
       $about_us->keywords = $request->input('keywords ');


       if($request->file('image')){
           $path = Storage::disk('public')->put('image',  $request->file('image'));
           $about_us->fill(['file' => asset($path)])->save();
       }


       $about_us->user_id = auth()->id();
       $about_us->save(); // UPDATE, INSERT depending if it already exists or not.
       ;
       $show = 'experience';
       $notification = 'Tu experiencia laboral se ha registrado correctamente.';


       return back()->with(compact('notification', 'show', 'about_us'));
   }
}
