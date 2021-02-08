@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Blog actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/blogs/'.$blog->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_blog" class="form-label">Titulo del Blog</label>
                <input type="text" class="form-control" name="titulo_blog" id="titulo_blog" value="{{ $blog->titulo_blog }}">
            </div>
            <div class="col-md-6">
                <label for="img_portada" class="form-label">Portada</label>
                <img src="{{asset('storage').'/'.$blog->img_portada}}" width="200">
                <input type="file" class="form-control" name="img_portada" accept="image/png, image/jpeg" id="img_portada" value="" >
            </div>
            <div class="col-2">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" value="{{ $blog->fecha }}">
            </div>
            <div class="col-12">
                <label for="descripcion_blog" class="form-label">Descripcion del Blog</label>
                <input type="text" class="form-control" name="descripcion_blog" id="descripcion_blog" value="{{ $blog->descripcion_blog }}">
            </div>
            <div class="col-12">
                <label for="parrafo1" class="form-label">Parrafo 1</label>
                <input type="text" class="form-control" name="parrafo1" id="parrafo1" value="{{ $blog->parrafo1 }}">
            </div>
            <div class="col-12">
                <label for="parrafo2" class="form-label">Parrafo 2</label>
                <input type="text" class="form-control" name="parrafo2" id="parrafo2" value="{{ $blog->parrafo2 }}">
            </div>
            <div class="col-md-6">
                <label for="img_contenido" class="form-label">Imagen de Contenido</label>
                <img src="{{asset('storage').'/'.$blog->img_contenido}}" width="200">
                <input type="file" class="form-control" name="img_contenido" accept="image/png, image/jpeg" id="img_contenido" value="" >
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a class="btn btn-danger" href="{{ url('blogs') }}">Regresar a Blogs</a>
            </div>

        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
