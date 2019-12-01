<?php

namespace App\Http\Controllers\Web;

use App\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    public function index(Request $request)
    {
        $experiences = Experience::where('user_id', auth()->id())
            ->firstOrNew([ 'user_id' => auth()->id() ]);

        return view('web.abouts', compact('experiences'));
    }
}
