@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Crear un nuevo Blog</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/blogs') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-8">
                <label for="titulo_blog" class="form-label">Titulo del blog</label>
                <input type="text" class="form-control" name="titulo_blog" id="titulo_blog" required maxlength="191">
            </div>
            <div class="col-md-6">
                <label for="img_portada" class="form-label">Imagen de portada</label>
                <div class="alert alert-warning" role="alert">
                    Aviso: Usar imagenes Horizontales de tamaño 1200(ancho o similar) x 676(alto o que se mantenga en ese tamaño)
                </div>
                <input type="file" class="form-control" name="img_portada" required accept="image/png, image/jpeg" id="img_portada">
            </div>
            <div class="col-2">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" required id="fecha">
            </div>
            <div class="col-12">
                <label for="descripcion_blog" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion_blog" id="descripcion_blog" >
            </div>
            <div class="col-12">
                <label for="parrafo1" class="form-label">Parrafo 1</label>
                <input type="text" class="form-control" name="parrafo1" id="parrafo1" >
            </div>
            <div class="col-12">
                <label for="parrafo2" class="form-label">Parrafo 2</label>
                <input type="text" class="form-control" name="parrafo2" id="parrafo2" >
            </div>

            <div class="col-md-6">
                <label for="img_contenido" class="form-label">Imagen de Contenido</label>
                <input type="file" class="form-control" name="img_contenido" accept="image/png, image/jpeg" id="img_contenido">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Datos</button>
                <a href="{{ url('blogs') }}">Regresar a Blogs</a>
            </div>
        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
