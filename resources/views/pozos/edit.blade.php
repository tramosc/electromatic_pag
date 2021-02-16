@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Pozo Actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/pozos/'.$pozo->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_pozo" class="form-label">Titulo del Pozo</label>
                <input type="text" class="form-control" name="titulo_pozo" id="titulo_pozo" value="{{ $pozo->titulo_pozo }}">
            </div>
            <div class="col-12">
                <label for="descripcion_pozo" class="form-label">Descripcion del Pozo</label>
                <input type="text" class="form-control" name="descripcion_pozo" id="descripcion_pozo" value="{{ $pozo->descripcion_pozo }}">
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ $pozo->precio }}">
            </div>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen Portada</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$pozo->img_uno}}" width="200">
            </div>
                    <hr></hr>
            <h1>Imagenes para zoom</h1>
            <div class="col-md-6">
                <label for="img_zoom1" class="form-label">Imagen zoom 1</label>
                <input type="file" class="form-control" name="img_zoom1" id="img_zoom1" accept="image/png, image/jpeg" value="">
                @if(($pozo->img_zoom1))
                        <img src="{{asset('storage').'/'.$pozo->img_zoom1}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
            </div>
            <div class="col-md-6">
                <label for="img_zoom2" class="form-label">Imagen zoom 2</label>
                <input type="file" class="form-control" name="img_zoom2" id="img_zoom2" accept="image/png, image/jpeg" value="">
                @if(($pozo->img_zoom2))
                        <img src="{{asset('storage').'/'.$pozo->img_zoom2}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
            </div>
            <div class="col-md-6">
                <label for="img_zoom3" class="form-label">Imagen zoom 3</label>
                <input type="file" class="form-control" name="img_zoom3" id="img_zoom3" accept="image/png, image/jpeg" value="">
                
                @if(($pozo->img_zoom3))
                        <img src="{{asset('storage').'/'.$pozo->img_zoom3}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
            </div>
            <div class="col-md-6">
                <label for="img_zoom4" class="form-label">Imagen zoom 4</label>
                <input type="file" class="form-control" name="img_zoom4" id="img_zoom4" accept="image/png, image/jpeg" value="">
                @if(($pozo->img_zoom4))
                        <img src="{{asset('storage').'/'.$pozo->img_zoom4}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
            </div>


            <hr></hr>
            <h1>Imagenes para la galeria (Opcional) </h1>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen nro 1</label>
                @if(($pozo->img_dos))
                        <img src="{{asset('storage').'/'.$pozo->img_dos}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" value="">
            </div>


            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen nro 2</label>
                @if(($pozo->img_tres))
                        <img src="{{asset('storage').'/'.$pozo->img_tres}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg" value="">
            </div>


            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen nro 3</label>
                @if(($pozo->img_cuatro))
                        <img src="{{asset('storage').'/'.$pozo->img_cuatro}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg" value="">
            </div>


            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen nro 4</label>
                @if(($pozo->img_cinco))
                        <img src="{{asset('storage').'/'.$pozo->img_cinco}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" accept="image/png, image/jpeg" value="">
            </div>


            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen nro 5</label>
                @if(($pozo->img_seis))
                        <img src="{{asset('storage').'/'.$pozo->img_seis}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_seis" id="img_seis" accept="image/png, image/jpeg" value="">
            </div>


            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen nro 6</label>
                @if(($pozo->img_siete))
                        <img src="{{asset('storage').'/'.$pozo->img_siete}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_siete" id="img_siete" accept="image/png, image/jpeg" value="">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a href="{{ url('pozos') }}">Regresar a Pozos</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
