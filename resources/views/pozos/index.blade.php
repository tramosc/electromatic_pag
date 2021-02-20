@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="row justify-content-center">
<a class="btn btn-primary"  href="{{ url('pozos/create') }}">Crear Nuevo Pozo</a>
        <h1 class="align:center">Lista de Pozos</h1>
        <i class="bi bi-plus-square-fill"></i>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo de Pozo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pozos as $pozo)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$pozo->titulo_pozo}}</td>
                <td>{{$pozo->descripcion_pozo}}</td>
                <td>{{$pozo->precio}}</td>
                <td>
                <form method="POST" action="{{ url('/pozos/'.$pozo->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a class="btn btn-warning" href="{{ url('/pozos/'.$pozo->id.'/edit') }}">Editar</a>
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
        {{ $pozos->links() }}
    </div>


</div>
@endsection
