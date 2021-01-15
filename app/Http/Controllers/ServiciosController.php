<?php

namespace App\Http\Controllers;

use App\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ServiciosController extends Controller
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
        $datos['servicios'] = Servicios::paginate(15);
        return view('servicios.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosServicio = request()->all();
        
        $datosServicio = request()->except('_token');
        if($request->hasFile('img_portada')){
            $datosServicio['img_portada']=$request->file('img_portada')->store('uploads', 'public');
        }
        Servicios::insert($datosServicio);
        return redirect('servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios)
    {
        //
        return view('servicioElemento',compact('servicios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $servicio= Servicios::findOrFail($id);

        return view('servicios.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosServicio=request()->except(['_token','_method']);

         if($request->hasFile('img_portada')){
 
             $servicio= Servicios::findOrFail($id);
 
             Storage::delete('public/'.$servicio->img_portada);
 
             $datosServicio['img_portada']=$request->file('img_portada')->store('uploads', 'public');
         }
         Servicios::where('id','=',$id)->update($datosServicio);
 
         $servicio= Servicios::findOrFail($id);
         return redirect('servicios');
         //return view('servicios.edit', compact('servicio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $servicio= Servicios::findOrFail($id);

        if(Storage::delete('public/'.$servicio->img_portada)){
            Servicios::destroy($id);
        }
        

        return redirect('servicios');
    }

}
