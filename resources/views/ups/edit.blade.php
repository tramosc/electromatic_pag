@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Repuesto Actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/ups/'.$ups->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_ups" class="form-label">Titulo del UPS</label>
                <input type="text" class="form-control" name="titulo_ups" id="titulo_ups" value="{{ $ups->titulo_ups }}">
            </div>
            <div class="col-12">
                <label for="descripcion_ups" class="form-label">Descripcion del UPS</label>
                <input type="text" class="form-control" name="descripcion_ups" id="descripcion_ups" value="{{ $ups->descripcion_ups }}">
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ $ups->precio }}">
            </div>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen de Portada</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_uno}}" width="200">
            </div>
            <h3>Imagenes para el Zoom (Solo imagenes horizontales) </h3>
            <div class="col-md-6">
                <label for="img_zoom1" class="form-label">Imagen zoom 1</label>
                <input type="file" class="form-control" name="img_zoom1" id="img_zoom1" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_zoom1}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_zoom2" class="form-label">Imagen zoom 2</label>
                <input type="file" class="form-control" name="img_zoom2" id="img_zoom2" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_zoom2}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_zoom3" class="form-label">Imagen zoom 3</label>
                <input type="file" class="form-control" name="img_zoom3" id="img_zoom3" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_zoom3}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_zoom4" class="form-label">Imagen zoom 4</label>
                <input type="file" class="form-control" name="img_zoom4" id="img_zoom4" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_zoom4}}" width="200">
            </div>
            <h3>Imagenes para la Galeria</h3>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen nro 1</label>
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_dos}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen nro 2</label>
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_tres}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen nro 3</label>
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_cuatro}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen nro 4</label>
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_cinco}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen nro 5</label>
                <input type="file" class="form-control" name="img_seis" id="img_seis" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_seis}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen nro 6</label>
                <input type="file" class="form-control" name="img_siete" id="img_siete" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$ups->img_siete}}" width="200">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a href="{{ url('ups') }}">Regresar a UPS</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
