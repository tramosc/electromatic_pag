@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="row justify-content-center">
<a class="btn btn-primary"  href="{{ url('suministros/create') }}">Crear Nuevo Suministro</a>
        <h1 class="align:center">Lista de Suministros</h1>
        <i class="bi bi-plus-square-fill"></i>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo de Suministros</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($suministros as $suministro)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$suministro->titulo_suministro}}</td>
                <td>{{$suministro->descripcion_suministro}}</td>
                <td>{{$suministro->precio}}</td>
                <td>
                <form method="POST" action="{{ url('/suministros/'.$suministro->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a class="btn btn-warning" href="{{ url('/suministros/'.$suministro->id.'/edit') }}">Editar</a>
                <button type="submit" onclick="return confirm('¿Desea borrar?');" class="btn btn-danger">Eliminar</button>
                </div>
                </form>
                </td>
                </tr>
                <tr>
                <tr>
            @endforeach
            </tbody>
        </table>
    </div>


</div>
@endsection
