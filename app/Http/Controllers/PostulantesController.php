<?php

namespace App\Http\Controllers;

use App\Postulantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostulantesController extends Controller
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
        $datos['postulantes'] = Postulantes::paginate(25);
        return view('postulantes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('postulantes.create');
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
        $datosPostulante = request()->except('_token');
        
        if($request->hasFile('cv')){
            $datosPostulante['cv']=$request->file('cv')->store('uploads', 'public');
        }
        
        Postulantes::insert($datosPostulante);
        return redirect('/')->with('msg', 'The Message');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $postulante= Postulantes::findOrFail($id);

        return view('postulantes.show', compact('postulante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Postulantes $postulantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulantes $postulantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $postulante= Postulantes::findOrFail($id);

        if(Storage::delete('public/'.$postulante->cv)){
            Postulantes::destroy($id);
        }

        return redirect('postulantes');
    }
}
