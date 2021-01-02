@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Subir imagen a servicio</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/imagenes') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                <label for="titulo_img" class="form-label">Titulo Imagen</label>
                <input type="text" class="form-control" name="titulo_img" id="titulo_img">
            </div>
            <div class="col-md-6">
                <label for="imagen_servicios" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen_servicios" id="imagen_servicios">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Subir Imagen</button>
                <a href="{{ url('servicios') }}">Regresar</a>
            </div>

        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
