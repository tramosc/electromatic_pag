@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Manual actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/manuales/'.$manual->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_manual" class="form-label">Titulo del manual</label>
                <input type="text" class="form-control" name="titulo_manual" id="titulo_manual" required value="{{ $manual->titulo_manual }}">
            </div>
            <div class="col-md-6">
                <label for="img_manual" class="form-label">Portada</label>
                <img src="{{asset('storage').'/'.$manual->img_manual}}" width="200">
                <input type="file" class="form-control" name="img_manual" id="img_manual" required accept="image/png, image/jpeg" value="">
            </div>
            <div class="col-2">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" value="{{ $manual->fecha }}">
            </div>
            <div class="col-12">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" required value="{{ $manual->descripcion }}">
            </div>
            <div class="col-12">
                <label for="detalles" class="form-label">Detalles</label>
                <input type="text" class="form-control" name="detalles" id="detalles" required value="{{ $manual->detalles }}">
            </div>
            <div class="col-md-6">
                <label for="archivo_url" class="form-label">Archivo</label>
                <a href="{{asset('storage').'/'.$manual->archivo_url}}" download="">Descargar</a>

                <input type="file" class="form-control" name="archivo_url" id="archivo_url"  required accept="application/pdf" value="">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a class="btn btn-danger" href="{{ url('manuales') }}">Regresar a Manuales</a>
            </div>

        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
