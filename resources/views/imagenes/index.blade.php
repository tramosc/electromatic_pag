@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a class="btn btn-primary" href="{{ url('imagenes/create') }}" role="button">Subir Nueva imagen</a>
        <h1 class="align:center">Lista de imagenes para galeria</h1>
        
        <i class="bi bi-plus-square-fill"></i>
        

        <table class="table table-striped table-hover">
        
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo Imagen</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($imagenes as $imagen)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$imagen->titulo_img}}</td>
                <td>
                <img src="{{asset('storage').'/'.$imagen->imagen_servicios}}" width="200">
                
                </td>
                <td>
                <form method="POST" action="{{ url('/imagenes/'.$imagen->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a class="btn btn-warning" href="{{ url('/imagenes/'.$imagen->id.'/edit') }}">Editar</a>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="submit" onclick="return confirm('¿Desea borrar?');" class="btn btn-danger">Eliminar</button>
                </div>
                </form>

                
                </td>
                </tr>
                <tr>
                @endforeach

            </tbody>

        </table>
        <a class="btn btn-primary" href="{{ url('servicios') }}" role="button">Regresar a servicios</a>
    </div>
</div>
@endsection
