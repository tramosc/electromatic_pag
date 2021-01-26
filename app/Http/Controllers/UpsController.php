<?php

namespace App\Http\Controllers;

use App\Ups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UpsController extends Controller
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
        $datos['ups'] = Ups::paginate(25);
        return view('ups.index', $datos);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ups.create');
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
        $datosUps = request()->except('_token');
        if($request->hasFile('img_uno')){
            $datosUps['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        if($request->hasFile('img_dos')){
            $datosUps['img_dos']=$request->file('img_dos')->store('uploads', 'public');
        }

        if($request->hasFile('img_tres')){
            $datosUps['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        if($request->hasFile('img_cuatro')){
            $datosUps['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        if($request->hasFile('img_cinco')){
            $datosUps['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
        }

        if($request->hasFile('img_seis')){
            $datosUps['img_seis']=$request->file('img_seis')->store('uploads', 'public');
        }

        if($request->hasFile('img_siete')){
            $datosUps['img_siete']=$request->file('img_siete')->store('uploads', 'public');
        }

        if($request->hasFile('img_zoom1')){
            $datosUps['img_zoom1']=$request->file('img_zoom1')->store('uploads', 'public');
        }

        if($request->hasFile('img_zoom2')){
            $datosUps['img_zoom2']=$request->file('img_zoom2')->store('uploads', 'public');
        }
        Ups::insert($datosUps);
        return redirect('ups');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function show(Ups $ups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ups= Ups::findOrFail($id);

        return view('ups.edit', compact('ups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUps=request()->except(['_token','_method']);

        if($request->hasFile('img_uno')){
             $ups= Ups::findOrFail($id);
             Storage::delete('public/'.$ups->img_uno);
             $datosUps['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        if($request->hasFile('img_dos')){
            $ups= Ups::findOrFail($id);
            Storage::delete('public/'.$ups->img_dos);
            $datosUps['img_dos']=$request->file('img_dos')->store('uploads', 'public');
       }

       if($request->hasFile('img_tres')){
        $ups= Ups::findOrFail($id);
        Storage::delete('public/'.$ups->img_tres);
        $datosUps['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        if($request->hasFile('img_cuatro')){
            $ups= Ups::findOrFail($id);
            Storage::delete('public/'.$ups->img_cuatro);
            $datosUps['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        if($request->hasFile('img_cinco')){
           $ups= Ups::findOrFail($id);
           Storage::delete('public/'.$ups->img_cinco);
           $datosUps['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
       }

       if($request->hasFile('img_seis')){
           $ups= Ups::findOrFail($id);
           Storage::delete('public/'.$ups->img_seis);
           $datosUps['img_seis']=$request->file('img_seis')->store('uploads', 'public');
       }

       if($request->hasFile('img_siete')){
           $ups= Ups::findOrFail($id);
           Storage::delete('public/'.$ups->img_siete);
           $datosUps['img_siete']=$request->file('img_siete')->store('uploads', 'public');
       }

       if($request->hasFile('img_zoom1')){
           $ups= Ups::findOrFail($id);
           Storage::delete('public/'.$ups->img_zoom1);
           $datosUps['img_zoom1']=$request->file('img_zoom1')->store('uploads', 'public');
       }

       if($request->hasFile('img_zoom2')){
        $ups= Ups::findOrFail($id);
        Storage::delete('public/'.$ups->img_zoom2);
        $datosUps['img_zoom2']=$request->file('img_zoom2')->store('uploads', 'public');
    }

         Ups::where('id','=',$id)->update($datosUps);
 
         $ups= Ups::findOrFail($id);
         return redirect('ups');
         //return view('servicios.edit', compact('servicio'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ups= Ups::findOrFail($id);

        if(Storage::delete('public/'.$ups->img_uno)){
            Ups::destroy($id);
        }
        if(Storage::delete('public/'.$ups->img_dos)){
            Ups::destroy($id);
        }
        if(Storage::delete('public/'.$ups->img_tres)){
            Ups::destroy($id);
        }
        if(Storage::delete('public/'.$ups->img_cuatro)){
            Ups::destroy($id);
        }
        if(Storage::delete('public/'.$ups->img_cinco)){
            Ups::destroy($id);
        }
        if(Storage::delete('public/'.$ups->img_seis)){
            Ups::destroy($id);
        }
        if(Storage::delete('public/'.$ups->img_siete)){
            Ups::destroy($id);
        }
        if(Storage::delete('public/'.$ups->img_zoom1)){
            Ups::destroy($id);
        }
        if(Storage::delete('public/'.$ups->img_zoom2)){
            Ups::destroy($id);
        }
        return redirect('ups');
    }
}
