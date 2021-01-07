<?php

namespace App\Http\Controllers;

use App\Postulantes;
use Illuminate\Http\Request;

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
        return view('postulantes.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postulantes  $postulantes
     * @return \Illuminate\Http\Response
     */
    public function show(Postulantes $postulantes)
    {
        //
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
    public function destroy(Postulantes $postulantes)
    {
        //
    }
}
