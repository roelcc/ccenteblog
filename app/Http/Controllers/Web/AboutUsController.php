<?php

namespace App\Http\Controllers\Web;

use App\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{

    public function index()
    {

        $about_us = AboutUs::where('user_id', auth()->id())
            ->firstOrNew([ 'user_id' => auth()->id() ]);
         return view('web.abouts', compact('about_us'));
    }
}
