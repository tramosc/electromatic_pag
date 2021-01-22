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
        $datos['grupos'] = Grupos::paginate(25);
        return view('grupos', $datos);
    }
    public function viewGrupo($id)
    {
        $grupo = Grupos::findOrFail($id);
        return view('grupoElemento', compact('grupo'));
    }



    public function indexPozos()
    {
        //
        $datos['pozos'] = Pozos::paginate(25);
        return view('pozos', $datos);
    }
    public function viewPozo($id)
    {
        $pozo = Pozos::findOrFail($id);
        return view('pozoElemento', compact('pozo'));
    }



    public function indexUPS()
    {
        //
        $datos['ups'] = Ups::paginate(25);
        return view('ups', $datos);
    }
    public function viewUPS($id)
    {
        $ups = Ups::findOrFail($id);
        return view('upsElemento', compact('ups'));
    }



    public function indexCapacitaciones()
    {
        //
        $datos['capacitaciones'] = Capacitaciones::paginate(25);
        return view('capacitaciones', $datos);
    }
    public function viewCapacitacion($id)
    {
        $capacitacion = Capacitaciones::findOrFail($id);
        return view('capacitacionElemento', compact('capacitacion'));
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
