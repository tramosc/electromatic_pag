<?php

namespace App\Http\Controllers;

use App\Repuestos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class RepuestosController extends Controller
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
        $datos['repuestos'] = Repuestos::paginate(15);
        return view('repuestos.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('repuestos.create');
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
        $datosRepuesto = request()->except('_token');
        if($request->hasFile('img_repuesto')){
            $datosRepuesto['img_repuesto']=$request->file('img_repuesto')->store('uploads', 'public');
        }
        Repuestos::insert($datosRepuesto);
        return redirect('repuestos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repuestos  $repuestos
     * @return \Illuminate\Http\Response
     */
    public function show(Repuestos $repuestos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repuestos  $repuestos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $repuesto= Repuestos::findOrFail($id);

        return view('repuestos.edit', compact('repuesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repuestos  $repuestos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //
         $datosRepuesto=request()->except(['_token','_method']);

         if($request->hasFile('img_repuesto')){
 
             $repuesto= Repuestos::findOrFail($id);
 
             Storage::delete('public/'.$repuesto->img_repuesto);
 
             $datosRepuesto['img_repuesto']=$request->file('img_repuesto')->store('uploads', 'public');
         }
         Repuestos::where('id','=',$id)->update($datosRepuesto);
 
         $repuesto= Repuestos::findOrFail($id);
         return redirect('repuestos');
         //return view('servicios.edit', compact('servicio'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repuestos  $repuestos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $repuesto= Repuestos::findOrFail($id);

        if(Storage::delete('public/'.$repuesto->img_repuesto)){
            Repuestos::destroy($id);
        }
        

        return redirect('repuestos');
    }
}
