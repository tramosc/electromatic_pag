@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Imagen actual -INICIO</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/imagenesInicio/'.$imagen->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_img" class="form-label">Titulo de la imagen</label>
                <input type="text" class="form-control" name="titulo_img" id="titulo_img" value="{{ $imagen->titulo_img }}">
            </div>
            <div class="col-md-6">
                <label for="imagen_inicio" class="form-label">Portada</label>
                <img src="{{asset('storage').'/'.$imagen->imagen_inicio}}" width="200">
                <input type="file" class="form-control" name="imagen_inicio" accept="image/png, image/jpeg" id="imagen_inicio" value="" >
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a class="btn btn-danger" href="{{ url('imagenesInicio') }}">Regresar a Galeria</a>
            </div>

        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
