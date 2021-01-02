<?php

namespace App\Http\Controllers;

use App\images_servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ImagesServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $datos['imagenes'] = images_servicios::paginate(15);
        return view('imagenes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('imagenes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosImagen = request()->except('_token');
        if($request->hasFile('imagen_servicios')){
            $datosImagen['imagen_servicios']=$request->file('imagen_servicios')->store('uploads', 'public');
        }
        images_servicios::insert($datosImagen);
        return redirect('imagenes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\images_servicios  $images_servicios
     * @return \Illuminate\Http\Response
     */
    public function show(images_servicios $images_servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\images_servicios  $images_servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $imagen= images_servicios::findOrFail($id);

        return view('imagenes.edit', compact('imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\images_servicios  $images_servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosImagenes=request()->except(['_token','_method']);

        if($request->hasFile('imagen_servicios')){

            $imagen= images_servicios::findOrFail($id);
            Storage::delete('public/'.$imagen->imagen_servicios);
            $datosImagen['imagen_servicios']=$request->file('imagen_servicios')->store('uploads', 'public');
        }

        images_servicios::where('id','=',$id)->update($datosImagen);

        $imagen= images_servicios::findOrFail($id);
        return redirect('imagenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\images_servicios  $images_servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $imagen= images_servicios::findOrFail($id);

        if(Storage::delete('public/'.$imagen->imagen_servicios)){
            images_servicios::destroy($id);
        }
        

        return redirect('imagenes');
    }
}
