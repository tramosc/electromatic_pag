@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="row justify-content-center">
<a class="btn btn-primary" href="{{ url('blogs/create') }}">Crear Nuevo Blog</a>

<h1 class="align:center">Lista de Blogs</h1>
        <i class="bi bi-plus-square-fill"></i>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titulo Blog</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$blog->titulo_blog}}</td>
                <td>{{$blog->fecha}}</td>
                <td>
                <form method="POST" action="{{ url('/blogs/'.$blog->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a class="btn btn-warning" href="{{ url('/blogs/'.$blog->id.'/edit') }}">Editar</a>
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
        {{ $blogs->links() }}
    </div>


</div>
@endsection
