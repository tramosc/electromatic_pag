<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios;
use App\Repuestos;
use App\Manuales;
use App\imagesInicio;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function index()
    {
        //
        $datos['servicios'] = Servicios::paginate(15);
        return view('servicios', $datos);
    }

    public function viewImagenes(){
        //
        $datos['imagenesInicio'] = imagesInicio::paginate(15);
        return view('welcome', $datos);
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

    public function view($id)
    {
        $servicio= Servicios::findOrFail($id);

        return view('servicioElemento', compact('servicio'));
    }

   
}
