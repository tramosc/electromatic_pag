@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="row justify-content-center">
<a class="btn btn-primary" href="{{ url('manuales/create') }}">Crear Nuevo Manual</a>

<h1 class="align:center">Lista de Manuales</h1>
        <i class="bi bi-plus-square-fill"></i>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo Manual</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Detalles</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($manuales as $manual)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$manual->titulo_manual}}</td>
                <td>{{$manual->fecha}}</td>
                <td>{{$manual->descripcion}}</td>
                <td>{{$manual->detalles}}</td>
                <td>
                <form method="POST" action="{{ url('/manuales/'.$manual->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a class="btn btn-warning" href="{{ url('/manuales/'.$manual->id.'/edit') }}">Editar</a>
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
        {{ $manuales->links() }}
    </div>


</div>
@endsection
