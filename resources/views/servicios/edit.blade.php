@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar servicio actual</h1>
    <a href="{{ url('imagenes/create') }}">Subir imagenes</a>
        <div class="card" style="width: 70rem;">
        <div class="card-body">

        <form action="{{ url('/servicios/'.$servicio->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="col-md-6">
                <label for="titulo_servicios" class="form-label">titulo</label>
                <input type="text" class="form-control" name="titulo_servicios" id="titulo_servicios" value="{{ $servicio->titulo_servicios }}">
            </div>
            <div class="col-md-6">
                <label for="img_portada" class="form-label">Portada</label>
                <img src="{{asset('storage').'/'.$servicio->img_portada}}" width="200">
                <input type="file" class="form-control" name="img_portada" id="img_portada" value="">
            </div>
            <div class="col-12">
                <label for="definicion" class="form-label">Definicion</label>
                <input type="text" class="form-control" name="definicion" id="definicion" value="{{ $servicio->definicion }}">
            </div>
            <div class="col-12">
                <label for="caracteristicas" class="form-label">Caracteristicas</label>
                <div class="form-floating">
                <textarea class="form-control"  id="caracteristicas" name="caracteristicas" style="height: 100px" value="{{ $servicio->caracteristicas }}"></textarea>
                <label for="caracteristicas">Datos...</label>
                </div>
            </div>
            <div class="col-12">
                <label for="importancia" class="form-label">Importancia</label>
                <div class="form-floating">
                <textarea class="form-control"  id="importancia" name="importancia" style="height: 100px" value="{{ $servicio->importancia }}"></textarea>
                <label for="importancia">Datos...</label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ url('servicios') }}">Regresar a Servicios</a>
            </div>
        </form>

        </div>

 

        </div>
    </div>
</div>
@endsection
