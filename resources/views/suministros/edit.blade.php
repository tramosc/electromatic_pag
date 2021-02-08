@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Suministro Actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/suministros/'.$suministro->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_suministro" class="form-label">Titulo del Suministro</label>
                <input type="text" class="form-control" name="titulo_suministro" id="titulo_suministro" value="{{ $suministro->titulo_suministro }}">
            </div>
            <div class="col-12">
                <label for="descripcion_suministro" class="form-label">Descripcion del Suministro</label>
                <input type="text" class="form-control" name="descripcion_suministro" id="descripcion_suministro" value="{{ $suministro->descripcion_suministro }}">
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ $suministro->precio }}">
            </div>
            <h3>Imagenes para zoom</h3>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen Portada</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_uno}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_zoom1" class="form-label">Imagen zoom 1</label>
                <input type="file" class="form-control" name="img_zoom1" id="img_zoom1" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_zoom1}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_zoom2" class="form-label">Imagen zoom 1</label>
                <input type="file" class="form-control" name="img_zoom2" id="img_zoom2" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_zoom2}}" width="200">
            </div>
            <h3>Imagenes para el Galeria</h3>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen nro 2</label>
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_dos}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen nro 3</label>
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_tres}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen nro 4</label>
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_cuatro}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen nro 5</label>
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_cinco}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen nro 6</label>
                <input type="file" class="form-control" name="img_seis" id="img_seis" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_seis}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen nro 7</label>
                <input type="file" class="form-control" name="img_siete" id="img_siete" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$suministro->img_siete}}" width="200">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a href="{{ url('suministros') }}">Regresar a Suministros</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
