<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $service = Service::all();
        return view('admin.services.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceStoreRequest $request)
    {



        $service = Service::create($request->all());
//        $this->authorize('pass', $service);

        //IMAGE
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $service->fill(['file' => asset($path)])->save();
        }

//        TAGS
//        $service->tags()->attach($request->get('tags'));

        return redirect()->route('services.edit', $service->id)->with('info', 'Servicio creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        $this->authorize('pass', $service);

        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $service       = Service::find($id);
        $this->authorize('pass', $service);

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, $id)
    {
        $service = Service::find($id);
        $this->authorize('pass', $service);

        $service->fill($request->all())->save();

        //IMAGE
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $service->fill(['file' => asset($path)])->save();
        }

        //TAGS
//        $service->tags()->sync($request->get('tags'));

        return redirect()->route('services.edit', $service->id)->with('info', 'Entrada actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $service = Service::find($id)->delete();
//        $this->authorize('pass', $service);

        return back()->with('info', 'Eliminado correctamente');
    }
}
