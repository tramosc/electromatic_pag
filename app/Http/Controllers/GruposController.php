<?php

namespace App\Http\Controllers;

use App\Grupos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GruposController extends Controller
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
        $datos['grupos'] = Grupos::paginate(25);
        return view('grupos.index', $datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('grupos.create');
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
        $datosGrupo = request()->except('_token');
        if($request->hasFile('img_uno')){
            $datosGrupo['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        if($request->hasFile('img_dos')){
            $datosGrupo['img_dos']=$request->file('img_dos')->store('uploads', 'public');
        }

        if($request->hasFile('img_tres')){
            $datosGrupo['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        if($request->hasFile('img_cuatro')){
            $datosGrupo['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        if($request->hasFile('img_cinco')){
            $datosGrupo['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
        }

        if($request->hasFile('img_seis')){
            $datosGrupo['img_seis']=$request->file('img_seis')->store('uploads', 'public');
        }

        if($request->hasFile('img_siete')){
            $datosGrupo['img_siete']=$request->file('img_siete')->store('uploads', 'public');
        }

        if($request->hasFile('img_zoom1')){
            $datosGrupo['img_zoom1']=$request->file('img_zoom1')->store('uploads', 'public');
        }

        if($request->hasFile('img_zoom2')){
            $datosGrupo['img_zoom2']=$request->file('img_zoom2')->store('uploads', 'public');
        }
        
        Grupos::insert($datosGrupo);
        return redirect('grupos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function show(Grupos $grupos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $grupo= Grupos::findOrFail($id);

        return view('grupos.edit', compact('grupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosGrupo=request()->except(['_token','_method']);

        if($request->hasFile('img_uno')){
             $grupo= Grupos::findOrFail($id);
             Storage::delete('public/'.$grupo->img_uno);
             $datosGrupo['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        if($request->hasFile('img_dos')){
            $grupo= Grupos::findOrFail($id);
            Storage::delete('public/'.$grupo->img_dos);
            $datosGrupo['img_dos']=$request->file('img_dos')->store('uploads', 'public');
       }

        if($request->hasFile('img_tres')){
        $grupo= Grupos::findOrFail($id);
        Storage::delete('public/'.$grupo->img_tres);
        $datosGrupo['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        if($request->hasFile('img_cuatro')){
            $grupo= Grupos::findOrFail($id);
            Storage::delete('public/'.$grupo->img_cuatro);
            $datosGrupo['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        if($request->hasFile('img_cinco')){
            $grupo= Grupos::findOrFail($id);
            Storage::delete('public/'.$grupo->img_cinco);
            $datosGrupo['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
        }

        if($request->hasFile('img_seis')){
            $grupo= Grupos::findOrFail($id);
            Storage::delete('public/'.$grupo->img_seis);
            $datosGrupo['img_seis']=$request->file('img_seis')->store('uploads', 'public');
        }

        if($request->hasFile('img_siete')){
            $grupo= Grupos::findOrFail($id);
            Storage::delete('public/'.$grupo->img_siete);
            $datosGrupo['img_siete']=$request->file('img_siete')->store('uploads', 'public');
        }

        if($request->hasFile('img_zoom1')){
            $grupo= Grupos::findOrFail($id);
            Storage::delete('public/'.$grupo->img_zoom1);
            $datosGrupo['img_zoom1']=$request->file('img_zoom1')->store('uploads', 'public');
        }
        if($request->hasFile('img_zoom2')){
            $grupo= Grupos::findOrFail($id);
            Storage::delete('public/'.$grupo->img_zoom2);
            $datosGrupo['img_zoom2']=$request->file('img_zoom2')->store('uploads', 'public');
        }

        Grupos::where('id','=',$id)->update($datosGrupo);
 
         $grupo= Grupos::findOrFail($id);
         return redirect('grupos');
         //return view('servicios.edit', compact('servicio'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $grupo= Grupos::findOrFail($id);

        if(Storage::delete('public/'.$grupo->img_uno)){
            Grupos::destroy($id);
        }
        if(Storage::delete('public/'.$grupo->img_dos)){
            Grupos::destroy($id);
        }
        if(Storage::delete('public/'.$grupo->img_tres)){
            Grupos::destroy($id);
        }
        if(Storage::delete('public/'.$grupo->img_cuatro)){
            Grupos::destroy($id);
        }
        if(Storage::delete('public/'.$grupo->img_cinco)){
            Grupos::destroy($id);
        }
        if(Storage::delete('public/'.$grupo->img_seis)){
            Grupos::destroy($id);
        }
        if(Storage::delete('public/'.$grupo->img_siete)){
            Grupos::destroy($id);
        }
        if(Storage::delete('public/'.$grupo->img_zoom1)){
            Grupos::destroy($id);
        }
        if(Storage::delete('public/'.$grupo->img_zoom2)){
            Grupos::destroy($id);
        }
        return redirect('grupos');
    }
}
