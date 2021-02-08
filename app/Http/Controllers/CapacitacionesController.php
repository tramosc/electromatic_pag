<?php

namespace App\Http\Controllers;

use App\Capacitaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CapacitacionesController extends Controller
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
        $datos['capacitaciones'] = Capacitaciones::paginate(25);
        return view('capacitaciones.index', $datos);
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('capacitaciones.create');
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
        $datosCapacitacion = request()->except('_token');

        if($request->hasFile('img_portada')){
            $datosCapacitacion['img_portada']=$request->file('img_portada')->store('uploads', 'public');
        }

        if($request->hasFile('pdf_archivo')){
            $datosCapacitacion['pdf_archivo']=$request->file('pdf_archivo')->store('uploads', 'public');
        }

        if($request->hasFile('pdf_archivodos')){
            $datosCapacitacion['pdf_archivodos']=$request->file('pdf_archivodos')->store('uploads', 'public');
        }

        if($request->hasFile('pdf_archivotres')){
            $datosCapacitacion['pdf_archivotres']=$request->file('pdf_archivotres')->store('uploads', 'public');
        }

        if($request->hasFile('pdf_archivocuatro')){
            $datosCapacitacion['pdf_archivocuatro']=$request->file('pdf_archivocuatro')->store('uploads', 'public');
        }


        Capacitaciones::insert($datosCapacitacion);
        return redirect('capacitaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Capacitaciones  $capacitaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Capacitaciones $capacitaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Capacitaciones  $capacitaciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $capacitacion= Capacitaciones::findOrFail($id);

        return view('capacitaciones.edit', compact('capacitacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Capacitaciones  $capacitaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //
         $datosCapacitacion=request()->except(['_token','_method']);


         if($request->hasFile('img_portada')){
            $capacitacion= Capacitaciones::findOrFail($id);
            Storage::delete('public/'.$capacitacion->img_portada);
            $datosCapacitacion['img_portada']=$request->file('img_portada')->store('uploads', 'public');
       }


        if($request->hasFile('pdf_archivo')){

            $capacitacion= Capacitaciones::findOrFail($id);
            Storage::delete('public/'.$capacitacion->pdf_archivo);
            $datosCapacitacion['pdf_archivo']=$request->file('pdf_archivo')->store('uploads', 'public');
        }

        if($request->hasFile('pdf_archivodos')){

            $capacitacion= Capacitaciones::findOrFail($id);
            Storage::delete('public/'.$capacitacion->pdf_archivodos);
            $datosCapacitacion['pdf_archivodos']=$request->file('pdf_archivodos')->store('uploads', 'public');
        }

        if($request->hasFile('pdf_archivotres')){

            $capacitacion= Capacitaciones::findOrFail($id);
            Storage::delete('public/'.$capacitacion->pdf_archivotres);
            $datosCapacitacion['pdf_archivotres']=$request->file('pdf_archivotres')->store('uploads', 'public');
        }

        if($request->hasFile('pdf_archivocuatro')){

            $capacitacion= Capacitaciones::findOrFail($id);
            Storage::delete('public/'.$capacitacion->pdf_archivo);
            $datosCapacitacion['pdf_archivocuatro']=$request->file('pdf_archivocuatro')->store('uploads', 'public');
        }

         Capacitaciones::where('id','=',$id)->update($datosCapacitacion);
 
         $capacitacion= Capacitaciones::findOrFail($id);
         return redirect('capacitaciones');
         //return view('servicios.edit', compact('servicio'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Capacitaciones  $capacitaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $capacitacion= Capacitaciones::findOrFail($id);

        if(Storage::delete('public/'.$capacitacion->img_portada)){
            Capacitaciones::destroy($id);
        }
        if(Storage::delete('public/'.$capacitacion->pdf_archivo)){
            Capacitaciones::destroy($id);
        }
        if(Storage::delete('public/'.$capacitacion->pdf_archivodos)){
            Capacitaciones::destroy($id);
        }
        if(Storage::delete('public/'.$capacitacion->pdf_archivotres)){
            Capacitaciones::destroy($id);
        }
        if(Storage::delete('public/'.$capacitacion->pdf_archivocuatro)){
            Capacitaciones::destroy($id);
        }
        return redirect('capacitaciones');
    }
}
