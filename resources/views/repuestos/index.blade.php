@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="row justify-content-center">
<a class="btn btn-primary"  href="{{ url('repuestos/create') }}">Crear Nuevo Repuesto</a>
        <h1 class="align:center">Lista de Repuestos</h1>
        <i class="bi bi-plus-square-fill"></i>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo Repuesto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Detalles</th>
                <th scope="col">Precio</th>
                <th scope="col">img portada</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($repuestos as $repuesto)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$repuesto->titulo_repuesto}}</td>
                <td>{{$repuesto->descripcion_repuesto}}</td>
                <td>{{$repuesto->detalles_repuesto}}</td>
                <td>{{$repuesto->precio}}</td>
                <td>
                <img src="{{asset('storage').'/'.$repuesto->img_repuesto}}" width="200">
                </td>
                <td>
                <form method="POST" action="{{ url('/repuestos/'.$repuesto->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a class="btn btn-warning" href="{{ url('/repuestos/'.$repuesto->id.'/edit') }}">Editar</a>
                <button type="submit" onclick="return confirm('¿Desea borrar?');" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-success">Ver</button>
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
