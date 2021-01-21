@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a class="btn btn-primary" href="{{ url('servicios/create') }}">Crear Nuevo servicio</a>
        <h1 class="align:center">Lista de servicios</h1>
        
        <i class="bi bi-plus-square-fill"></i>
        

        <table class="table table-striped table-hover">
        
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo Servicios</th>
                <th scope="col">Definicion</th>
                <th scope="col">Caracteristicas</th>
                <th scope="col">Importancia</th>
                <th scope="col">Img Portada</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$servicio->titulo_servicios}}</td>
                <td>{{$servicio->definicion}}</td>
                <td>{{$servicio->caracteristicas}}</td>
                <td>{{$servicio->importancia}}</td>
                <td>
                <img src="{{asset('storage').'/'.$servicio->img_portada}}" width="200">
                
                </td>
                <td>
                <form method="POST" action="{{ url('/servicios/'.$servicio->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a class="btn btn-warning" href="{{ url('/servicios/'.$servicio->id.'/edit') }}">Editar</a>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="submit" disabled onclick="return confirm('¿Desea borrar?');" class="btn btn-danger">Eliminar</button>
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
