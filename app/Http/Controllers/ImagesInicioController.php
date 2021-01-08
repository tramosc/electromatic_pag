<?php

namespace App\Http\Controllers;

use App\imagesInicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesInicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['imagenesInicio'] = imagesInicio::paginate(15);
        return view('imagenesInicio.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('imagenesInicio.create');
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
        if($request->hasFile('imagen_inicio')){
            $datosImagen['imagen_inicio']=$request->file('imagen_inicio')->store('uploads', 'public');
        }
        imagesInicio::insert($datosImagen);
        return redirect('imagenesInicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\imagesInicio  $imagesInicio
     * @return \Illuminate\Http\Response
     */
    public function show(imagesInicio $imagesInicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imagesInicio  $imagesInicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $imagen= imagesInicio::findOrFail($id);

        return view('imagenesInicio.edit', compact('imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imagesInicio  $imagesInicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosImagenes=request()->except(['_token','_method']);

        if($request->hasFile('imagen_inicio')){

            $imagen= imagesInicio::findOrFail($id);
            Storage::delete('public/'.$imagen->imagen_servicios);
            $datosImagen['imagen_inicio']=$request->file('imagen_inicio')->store('uploads', 'public');
        }

        imagesInicio::where('id','=',$id)->update($datosImagen);

        $imagen= imagesInicio::findOrFail($id);
        return redirect('imagenesInicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imagesInicio  $imagesInicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $imagen= imagesInicio::findOrFail($id);

        if(Storage::delete('public/'.$imagen->imagen_inicio)){
            imagesInicio::destroy($id);
        }
        

        return redirect('imagenesInicio');
    }
}
