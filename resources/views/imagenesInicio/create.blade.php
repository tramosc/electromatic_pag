@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Subir imagen a Inicio</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/imagenesInicio') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}

            <div class="alert alert-warning" role="alert">
                <b>Recordatorio</b>: Usar solo imagenes horizontales en buena calidad
            </div>

            <div class="col-md-6">
                <label for="titulo_img" class="form-label">Titulo Imagen</label>
                <input type="text" class="form-control" name="titulo_img" id="titulo_img" required>
            </div>
            <div class="col-md-6">
                <label for="imagen_inicio" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen_inicio" required accept="image/png, image/jpeg" id="imagen_inicio">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Subir Imagen</button>
                <a href="{{ url('imagenesInicio') }}">Regresar</a>
            </div>

        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
