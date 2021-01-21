@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="row justify-content-center">
<a class="btn btn-primary"  href="{{ url('capacitaciones/create') }}">Crear Nueva Capacitacion</a>
        <h1 class="align:center">Lista de Capacitaciones</h1>
        <i class="bi bi-plus-square-fill"></i>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo Repuesto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            @foreach($capacitaciones as $capacitacion)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$capacitacion->titulo_capacitacion}}</td>
                <td>{{$capacitacion->descripcion_capacitacion}}</td>
                <td>{{$capacitacion->precio}}</td>
                <td>
                <form method="POST" action="{{ url('/capacitaciones/'.$capacitacion->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a class="btn btn-warning" href="{{ url('/capacitaciones/'.$capacitacion->id.'/edit') }}">Editar</a>
                <button type="submit" onclick="return confirm('¿Desea borrar?');" class="btn btn-danger">Eliminar</button>
                </div>
                </form>
                </td>
                </tr>
                <tr>
                <tr>
            @endforeach
            
            <tbody>
            
            </tbody>
        </table>
    </div>


</div>
@endsection
