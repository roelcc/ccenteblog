<?php

namespace App\Http\Controllers\Web;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service()
    {
        $services = Service::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.services', compact('services'));
    }

    public function services($slug){
        $service = Service::where('slug', $slug)->first();

        return view('web.service', compact('service'));
    }


}
