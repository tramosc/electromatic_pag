<?php

namespace App\Http\Controllers;

use App\Suministros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SuministrosController extends Controller
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
         $datos['suministros'] = Suministros::paginate(25);
         return view('suministros.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('suministros.create');
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
        //
        $datosSuministro = request()->except('_token');
        if($request->hasFile('img_uno')){
            $datosSuministro['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        if($request->hasFile('img_dos')){
            $datosSuministro['img_dos']=$request->file('img_dos')->store('uploads', 'public');
        }

        if($request->hasFile('img_tres')){
            $datosSuministro['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        if($request->hasFile('img_cuatro')){
            $datosSuministro['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        if($request->hasFile('img_cinco')){
            $datosSuministro['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
        }

        if($request->hasFile('img_seis')){
            $datosSuministro['img_seis']=$request->file('img_seis')->store('uploads', 'public');
        }

        if($request->hasFile('img_siete')){
            $datosSuministro['img_siete']=$request->file('img_siete')->store('uploads', 'public');
        }

        if($request->hasFile('img_zoom1')){
            $datosSuministro['img_zoom1']=$request->file('img_zoom1')->store('uploads', 'public');
        }

        if($request->hasFile('img_zoom2')){
            $datosSuministro['img_zoom2']=$request->file('img_zoom2')->store('uploads', 'public');
        }

        Suministros::insert($datosSuministro);
        return redirect('suministros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suministros  $suministros
     * @return \Illuminate\Http\Response
     */
    public function show(Suministros $suministros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suministros  $suministros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $suministro= Suministros::findOrFail($id);

        return view('suministros.edit', compact('suministro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suministros  $suministros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $datosSuministro=request()->except(['_token','_method']);

        if($request->hasFile('img_uno')){
             $suministro= Suministros::findOrFail($id);
             Storage::delete('public/'.$suministro->img_uno);
             $datosSuministro['img_uno']=$request->file('img_uno')->store('uploads', 'public');
        }

        if($request->hasFile('img_dos')){
            $suministro= Suministros::findOrFail($id);
            Storage::delete('public/'.$suministro->img_dos);
            $datosSuministro['img_dos']=$request->file('img_dos')->store('uploads', 'public');
       }

       if($request->hasFile('img_tres')){
        $suministro= Suministros::findOrFail($id);
        Storage::delete('public/'.$suministro->img_tres);
        $datosSuministro['img_tres']=$request->file('img_tres')->store('uploads', 'public');
        }

        if($request->hasFile('img_cuatro')){
            $suministro= Suministros::findOrFail($id);
            Storage::delete('public/'.$suministro->img_cuatro);
            $datosSuministro['img_cuatro']=$request->file('img_cuatro')->store('uploads', 'public');
        }

        if($request->hasFile('img_cinco')){
           $suministro= Suministros::findOrFail($id);
           Storage::delete('public/'.$suministro->img_cinco);
           $datosSuministro['img_cinco']=$request->file('img_cinco')->store('uploads', 'public');
       }

       if($request->hasFile('img_seis')){
           $suministro= Suministros::findOrFail($id);
           Storage::delete('public/'.$suministro->img_seis);
           $datosSuministro['img_seis']=$request->file('img_seis')->store('uploads', 'public');
       }

       if($request->hasFile('img_siete')){
           $suministro= Suministros::findOrFail($id);
           Storage::delete('public/'.$suministro->img_siete);
           $datosSuministro['img_siete']=$request->file('img_siete')->store('uploads', 'public');
       }

       if($request->hasFile('img_zoom1')){
           $suministro= Suministros::findOrFail($id);
           Storage::delete('public/'.$suministro->img_zoom1);
           $datosSuministro['img_zoom1']=$request->file('img_zoom1')->store('uploads', 'public');
       }

       if($request->hasFile('img_zoom2')){
           $suministro= Suministros::findOrFail($id);
           Storage::delete('public/'.$suministro->img_zoom2);
           $datosSuministro['img_zoom2']=$request->file('img_zoom2')->store('uploads', 'public');
       }
       
       if($request->hasFile('img_zoom3')){
        $suministro= Suministros::findOrFail($id);
        Storage::delete('public/'.$suministro->img_zoom3);
        $datosSuministro['img_zoom3']=$request->file('img_zoom3')->store('uploads', 'public');
    }

    if($request->hasFile('img_zoom4')){
        $suministro= Suministros::findOrFail($id);
        Storage::delete('public/'.$suministro->img_zoom4);
        $datosSuministro['img_zoom4']=$request->file('img_zoom4')->store('uploads', 'public');
    }

        Suministros::where('id','=',$id)->update($datosSuministro);
 
         $suministro= Suministros::findOrFail($id);
         return redirect('suministros');
         //return view('servicios.edit', compact('servicio'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suministros  $suministros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $suministro= Suministros::findOrFail($id);

        if(Storage::delete('public/'.$suministro->img_uno)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_dos)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_tres)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_cuatro)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_cinco)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_seis)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_siete)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_zoom1)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_zoom2)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_zoom3)){
            Suministros::destroy($id);
        }
        if(Storage::delete('public/'.$suministro->img_zoom4)){
            Suministros::destroy($id);
        }
        return redirect('suministros');
    }
}
