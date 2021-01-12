@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <h1 class="align:center">Postulantes recibidos</h1>
        <i class="bi bi-plus-square-fill"></i>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($postulantes as $postulante)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$postulante->nombre}}</td>
                <td>{{$postulante->apellidos}}</td>
                <td>
                <form method="POST" action="{{ url('/postulantes/'.$postulante->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a class="btn btn-success" href="{{ route('postulantes.show',$postulante->id) }}">Ver</a>
                <button type="submit" onclick="return confirm('¿Desea borrar?');" class="btn btn-danger">Eliminar</button>
                </div>
                </form>
                </td>
                </tr>
                <tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
