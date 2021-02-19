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

        /**Imagenes galeria controller */
        if($request->hasFile('img_uno')){
            $datosServicio['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        if($request->hasFile('img_dos')){
            $datosServicio['img_dos']=$request->file('img_dos')->store('uploads', 'public');
        }

        if($request->hasFile('img_tres')){
            $datosServicio['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        if($request->hasFile('img_cuatro')){
            $datosServicio['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        if($request->hasFile('img_cinco')){
            $datosServicio['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
        }

        if($request->hasFile('img_seis')){
            $datosServicio['img_seis']=$request->file('img_seis')->store('uploads', 'public');
        }

        if($request->hasFile('img_siete')){
            $datosServicio['img_siete']=$request->file('img_siete')->store('uploads', 'public');
        }

        if($request->hasFile('img_ocho')){
            $datosServicio['img_ocho']=$request->file('img_ocho')->store('uploads', 'public');
        }

        if($request->hasFile('img_nueve')){
            $datosServicio['img_nueve']=$request->file('img_nueve')->store('uploads', 'public');
        }

        if($request->hasFile('img_diez')){
            $datosServicio['img_diez']=$request->file('img_diez')->store('uploads', 'public');
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




         /** Imagenes de galeria  */
         /**imagen 1 */
         if($request->hasFile('img_uno')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_uno);

            $datosServicio['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        /**imagen 2 */
        if($request->hasFile('img_dos')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_dos);

            $datosServicio['img_dos']=$request->file('img_dos')->store('uploads', 'public');
        }

        /**imagen 3 */
        if($request->hasFile('img_tres')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_tres);

            $datosServicio['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        /**imagen 4 */
        if($request->hasFile('img_cuatro')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_cuatro);

            $datosServicio['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        /**imagen 5 */
        if($request->hasFile('img_cinco')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_cinco);

            $datosServicio['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
        }

        /**imagen 6 */
        if($request->hasFile('img_seis')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_seis);

            $datosServicio['img_seis']=$request->file('img_seis')->store('uploads', 'public');
        }

        /**imagen 7 */
        if($request->hasFile('img_siete')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_siete);

            $datosServicio['img_siete']=$request->file('img_siete')->store('uploads', 'public');
        }

        /**imagen 8 */
        if($request->hasFile('img_ocho')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_ocho);

            $datosServicio['img_ocho']=$request->file('img_ocho')->store('uploads', 'public');
        }

        /**imagen 9 */
        if($request->hasFile('img_nueve')){
 
            $servicio= Servicios::findOrFail($id);

            Storage::delete('public/'.$servicio->img_nueve);

            $datosServicio['img_nueve']=$request->file('img_nueve')->store('uploads', 'public');
        }

         /** Fin de imagenes de galeria */



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
