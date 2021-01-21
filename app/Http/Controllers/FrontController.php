<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios;
use App\Repuestos;
use App\Manuales;
use App\imagesInicio;
use App\Capacitaciones;
use App\Grupos;
use App\Pozos;
use App\Ups;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{

    public function viewImagenes(){
        //
        $datos['imagenesInicio'] = imagesInicio::paginate(30);
        return view('welcome', $datos);
    }


    public function index()
    {
        //
        $datos['servicios'] = Servicios::paginate(15);
        return view('servicios', $datos);
    }


    public function indexManuales()
    {
        $datos['manuales'] = Manuales::paginate(15);
        return view('manuales', $datos);
    }

    public function indexRepuestos()
    {
        $datos['repuestos'] = Repuestos::paginate(15);
        return view('repuestos', $datos);
    }

/**Nuevos cambios */
    public function indexGrupos()
    {
        //
        return view('grupos');
    }

    public function indexPozos()
    {
        //
        return view('pozos');
    }

    public function indexUPS()
    {
        //
        return view('ups');
    }

    public function indexCapacitaciones()
    {
        //
        return view('capacitaciones');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function viewServicio($id)
    {
        $servicio = Servicios::findOrFail($id);
        return view('servicioElemento', compact('servicio'));
    }

    public function viewManual($id)
    {
        $manual = Manuales::findOrFail($id);
        return view('manualElemento', compact('manual'));
    }


    public function viewRepuesto($id)
    {
        $repuesto = Repuestos::findOrFail($id);
        return view('repuestoElemento', compact('repuesto'));
    }


   
}
