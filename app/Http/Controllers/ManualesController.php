<?php

namespace App\Http\Controllers;

use App\Manuales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManualesController extends Controller
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
        $datos['manuales'] = Manuales::paginate(15);
        return view('manuales.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('manuales.create');
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
        $datosManual = request()->except('_token');
        if($request->hasFile('img_manual')){
            $datosManual['img_manual']=$request->file('img_manual')->store('uploads', 'public');
        }
        if($request->hasFile('imgs_galeria')){
            $datosManual['img_manual']=$request->file('img_manual')->store('uploads', 'public');
        }
        Manuales::insert($datosManual);
        return redirect('manuales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manuales  $manuales
     * @return \Illuminate\Http\Response
     */
    public function show(Manuales $manuales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manuales  $manuales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $manual= Manuales::findOrFail($id);

        return view('manuales.edit', compact('manual'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manuales  $manuales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosManuales=request()->except(['_token','_method']);

        if($request->hasFile('img_manual')){

            $Manual= Manuales::findOrFail($id);
            Storage::delete('public/'.$Manual->img_portada);
            $datosManual['img_manual']=$request->file('img_manual')->store('uploads', 'public');
        }

        Manuales::where('id','=',$id)->update($datosManual);

        $Manual= Manuales::findOrFail($id);
        //dd("actualizacion de imagen".$servicio->img_portada);
        return redirect('manuales');
        //return view('servicios.edit', compact('servicio'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manuales  $manuales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    
        $manual= Manuales::findOrFail($id);

        if(Storage::delete('public/'.$manual->img_manual)){
            Manuales::destroy($id);
        }
        
        

        return redirect('manuales');
    }
}
