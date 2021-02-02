<?php

namespace App\Http\Controllers;

use App\imagenesEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ImagenesEmpresaController extends Controller
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
        $datos['imagenesEmpresa'] = imagenesEmpresa::paginate(30);
        return view('imagenesEmpresa.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('imagenesEmpresa.create');
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
        if($request->hasFile('img_empresa')){
            $datosImagen['img_empresa']=$request->file('img_empresa')->store('uploads', 'public');
        }
        imagenesEmpresa::insert($datosImagen);
        return redirect('imagenesEmpresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\imagenesEmpresa  $imagenesEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show(imagenesEmpresa $imagenesEmpresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imagenesEmpresa  $imagenesEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $imagenEmpresa= imagenesEmpresa::findOrFail($id);

        return view('imagenesEmpresa.edit', compact('imagenEmpresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imagenesEmpresa  $imagenesEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosImagen=request()->except(['_token','_method']);

        if($request->hasFile('img_empresa')){

            $imagen= imagenesEmpresa::findOrFail($id);
            Storage::delete('public/'.$imagen->img_empresa);
            $datosImagen['img_empresa']=$request->file('img_empresa')->store('uploads', 'public');
        }

        imagenesEmpresa::where('id','=',$id)->update($datosImagen);

        $imagen= imagenesEmpresa::findOrFail($id);
        return redirect('imagenesEmpresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imagenesEmpresa  $imagenesEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $imagen= imagenesEmpresa::findOrFail($id);

        if(Storage::delete('public/'.$imagen->img_empresa)){
            imagenesEmpresa::destroy($id);
        }
        

        return redirect('imagenesEmpresa');
    }
}
