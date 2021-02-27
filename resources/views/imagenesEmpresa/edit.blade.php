@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Imagen actual - Nosotros</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/imagenesEmpresa/'.$imagenEmpresa->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_img" class="form-label">Titulo de la imagen</label>
                <input type="text" class="form-control" name="titulo_img" id="titulo_img" value="{{ $imagenEmpresa->titulo_img }}">
            </div>
            <div class="col-md-6">
                <label for="img_empresa" class="form-label">Portada</label>
                <img src="{{asset('storage').'/'.$imagenEmpresa->img_empresa}}" width="200">
                <input type="file" class="form-control" name="img_empresa" accept="image/png, image/jpeg" id="img_empresa" value="" >
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a class="btn btn-danger" href="{{ url('imagenesEmpresa') }}">Regresar a Galeria</a>
            </div>

        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
