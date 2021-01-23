<?php

namespace App\Http\Controllers;

use App\Pozos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PozosController extends Controller
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
        $datos['pozos'] = Pozos::paginate(25);
        return view('pozos.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pozos.create');
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
        $datosPozo = request()->except('_token');
        if($request->hasFile('img_uno')){
            $datosPozo['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        if($request->hasFile('img_dos')){
            $datosPozo['img_dos']=$request->file('img_dos')->store('uploads', 'public');
        }

        if($request->hasFile('img_tres')){
            $datosPozo['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        if($request->hasFile('img_cuatro')){
            $datosPozo['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        if($request->hasFile('img_cinco')){
            $datosPozo['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
        }

        if($request->hasFile('img_seis')){
            $datosPozo['img_seis']=$request->file('img_seis')->store('uploads', 'public');
        }

        if($request->hasFile('img_siete')){
            $datosPozo['img_siete']=$request->file('img_siete')->store('uploads', 'public');
        }
        Pozos::insert($datosPozo);
        return redirect('pozos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pozos  $pozos
     * @return \Illuminate\Http\Response
     */
    public function show(Pozos $pozos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pozos  $pozos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pozo= Pozos::findOrFail($id);

        return view('pozos.edit', compact('pozo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pozos  $pozos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                 //
                 $datosPozo=request()->except(['_token','_method']);

                 if($request->hasFile('img_uno')){
                      $pozo= Pozos::findOrFail($id);
                      Storage::delete('public/'.$pozo->img_uno);
                      $datosPozo['img_uno']=$request->file('img_uno')->store('uploads', 'public');
                 }
         
                 if($request->hasFile('img_dos')){
                     $pozo= Pozos::findOrFail($id);
                     Storage::delete('public/'.$pozo->img_dos);
                     $datosPozo['img_dos']=$request->file('img_dos')->store('uploads', 'public');
                }
         
                if($request->hasFile('img_tres')){
                 $pozo= Pozos::findOrFail($id);
                 Storage::delete('public/'.$pozo->img_tres);
                 $datosPozo['img_tres']=$request->file('img_tres')->store('uploads', 'public');
                 }
         
                 if($request->hasFile('img_cuatro')){
                     $pozo= Pozos::findOrFail($id);
                     Storage::delete('public/'.$pozo->img_cuatro);
                     $datosPozo['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
                 }

                 if($request->hasFile('img_cinco')){
                    $pozo= Pozos::findOrFail($id);
                    Storage::delete('public/'.$pozo->img_cinco);
                    $datosPozo['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
                }
        
                if($request->hasFile('img_seis')){
                    $pozo= Pozos::findOrFail($id);
                    Storage::delete('public/'.$pozo->img_seis);
                    $datosPozo['img_seis']=$request->file('img_seis')->store('uploads', 'public');
                }
        
                if($request->hasFile('img_siete')){
                    $pozo= Pozos::findOrFail($id);
                    Storage::delete('public/'.$pozo->img_siete);
                    $datosPozo['img_siete']=$request->file('img_siete')->store('uploads', 'public');
                }
        
                if($request->hasFile('img_ocho')){
                    $pozo= Pozos::findOrFail($id);
                    Storage::delete('public/'.$pozo->img_ocho);
                    $datosPozo['img_ocho']=$request->file('img_ocho')->store('uploads', 'public');
                }
         
                  Pozos::where('id','=',$id)->update($datosPozo);
          
                  $pozo= Pozos::findOrFail($id);
                  return redirect('pozos');
                  //return view('servicios.edit', compact('servicio'));
             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pozos  $pozos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pozo= Pozos::findOrFail($id);

        if(Storage::delete('public/'.$pozo->img_uno)){
            Pozos::destroy($id);
        }
        if(Storage::delete('public/'.$pozo->img_dos)){
            Pozos::destroy($id);
        }
        if(Storage::delete('public/'.$pozo->img_tres)){
            Pozos::destroy($id);
        }
        if(Storage::delete('public/'.$pozo->img_cuatro)){
            Pozos::destroy($id);
        }
        if(Storage::delete('public/'.$pozo->img_cinco)){
            Pozos::destroy($id);
        }
        if(Storage::delete('public/'.$pozo->img_seis)){
            Pozos::destroy($id);
        }
        if(Storage::delete('public/'.$pozo->img_siete)){
            Pozos::destroy($id);
        }
        if(Storage::delete('public/'.$pozo->img_ocho)){
            Pozos::destroy($id);
        }
        return redirect('pozos');
    }
}
