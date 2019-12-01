<?php

namespace App\Http\Controllers;

use App\AboutUsImage;
use Illuminate\Http\Request;

class AboutUsImageController extends Controller
{
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $path = $request->image->store('public');
            AboutUsImage::create(['file' => $path ]);
        }
    }
}
