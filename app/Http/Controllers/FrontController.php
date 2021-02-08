<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use App\Servicios;
use App\Manuales;
use App\imagesInicio;
use App\Capacitaciones;
use App\Grupos;
use App\Pozos;
use App\Ups;
use App\imagenesEmpresa;
use App\Suministros;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
/*
    public function viewImagenes(){
        //
        $datos['imagenesInicio'] = imagesInicio::paginate(30);
        return view('welcome', $datos);
    }
*/
/*
    public function viewPostManuales(){
        //
        $datos['manuales'] = Manuales::paginate(30);
        return view('welcome', $datos);
    }
*/
    public function viewImagenesCSSEmpresa(){
        //
        $datos['imagenesEmpresa'] = imagenesEmpresa::paginate(30);
        return view('empresa', $datos);
    }

    public function viewImagenesCSS(){
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


    public function indexSuministros()
    {
        //
        $datos['suministros'] = Suministros::paginate(25);
        return view('suministros', $datos);
    }
    public function viewSuministro($id)
    {
        $suministro = Suministros::findOrFail($id);
        return view('suministroElemento', compact('suministro'));
    }

    public function indexBlogs()
    {
        //
        $datos['blogs'] = Blogs::paginate(4);
        return view('blog', $datos);
    }
    public function viewBlog($id)
    {
        $blog = Blogs::findOrFail($id);
        $datos['blogs'] = Blogs::paginate(3);
        return view('blogElemento', compact('blog'),$datos);
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


   
}
