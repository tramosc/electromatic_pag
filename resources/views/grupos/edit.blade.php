@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Grupo Actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/grupos/'.$grupo->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_grupo" class="form-label">Titulo del Grupo</label>
                <input type="text" class="form-control" name="titulo_grupo" id="titulo_grupo" value="{{ $grupo->titulo_grupo }}">
            </div>
            <div class="col-12">
                <label for="descripcion_grupo" class="form-label">Descripcion del Grupo</label>
                <input type="text" class="form-control" name="descripcion_grupo" id="descripcion_grupo" value="{{ $grupo->descripcion_grupo }}">
            </div>
            <div class="col-">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ $grupo->precio }}">
            </div>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen nro 1</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_uno}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen nro 2</label>
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_dos}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen nro 3</label>
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_tres}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen nro 4</label>
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_cuatro}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen nro 5</label>
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_cinco}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen nro 6</label>
                <input type="file" class="form-control" name="img_seis" id="img_seis" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_seis}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen nro 7</label>
                <input type="file" class="form-control" name="img_siete" id="img_siete" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_siete}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_ocho" class="form-label">Imagen nro 8</label>
                <input type="file" class="form-control" name="img_ocho" id="img_ocho" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_ocho}}" width="200">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a href="{{ url('grupos') }}">Regresar a Grupos</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
