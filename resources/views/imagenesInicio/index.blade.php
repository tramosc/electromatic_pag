@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a class="btn btn-primary" href="{{ url('imagenesInicio/create/') }}" role="button">Subir Nueva imagen</a>
        <h1 class="align:center">Lista de imagenes para INICIO</h1>
        
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
                @foreach($imagenesInicio as $imagenInicio)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$imagenInicio->titulo_img}}</td>
                <td>
                <img src="{{asset('storage').'/'.$imagenInicio->imagen_inicio}}" width="200">
                
                </td>
                <td>
                <form method="POST" action="{{ url('/imagenesInicio/'.$imagenInicio->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a class="btn btn-warning" href="{{ url('/imagenesInicio/'.$imagenInicio->id.'/edit') }}">Editar</a>
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
    </div>
</div>
@endsection
