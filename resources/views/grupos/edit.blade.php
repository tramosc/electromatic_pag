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
            <div class="col-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ $grupo->precio }}">
            </div>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen de Portada</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$grupo->img_uno}}" width="200">
            </div>
            <h3>Imagenes para el elemento Zoom (Solo imagenes horizontales) </h3>
            <div class="col-md-6">
                <label for="img_zoom1" class="form-label">Imagen zoom 1</label>
                <input type="file" class="form-control" name="img_zoom1" id="img_zoom1" accept="image/png, image/jpeg" value="">
                    @if(($grupo->img_zoom1))
                            <img src="{{asset('storage').'/'.$grupo->img_zoom1}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                    @endif
            </div>
            <div class="col-md-6">
                <label for="img_zoom2" class="form-label">Imagen zoom 2</label>
                <input type="file" class="form-control" name="img_zoom2" id="img_zoom2" accept="image/png, image/jpeg" value="">
                @if(($grupo->img_zoom2))
                            <img src="{{asset('storage').'/'.$grupo->img_zoom2}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
            </div>
            <div class="col-md-6">
                <label for="img_zoom3" class="form-label">Imagen zoom 3</label>
                <input type="file" class="form-control" name="img_zoom3" id="img_zoom3" accept="image/png, image/jpeg" value="">
                @if(($grupo->img_zoom3))
                            <img src="{{asset('storage').'/'.$grupo->img_zoom3}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
            </div>
            <div class="col-md-6">
                <label for="img_zoom4" class="form-label">Imagen zoom 4</label>
                <input type="file" class="form-control" name="img_zoom4" id="img_zoom4" accept="image/png, image/jpeg" value="">
                @if(($grupo->img_zoom4))
                            <img src="{{asset('storage').'/'.$grupo->img_zoom4}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
            </div>

            <!----  ZONA GALERIA --->
                <hr></hr>
            <h1>Imagenes para la Galeria (Opcional)</h1>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen nro 1</label>
                @if(($grupo->img_dos))
                            <img src="{{asset('storage').'/'.$grupo->img_dos}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen nro 2</label>
                @if(($grupo->img_tres))
                            <img src="{{asset('storage').'/'.$grupo->img_tres}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen nro 3</label>
                @if(($grupo->img_cuatro))
                            <img src="{{asset('storage').'/'.$grupo->img_cuatro}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen nro 4</label>
                @if(($grupo->img_cinco))
                            <img src="{{asset('storage').'/'.$grupo->img_cinco}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen nro 5</label>
                @if(($grupo->img_seis))
                            <img src="{{asset('storage').'/'.$grupo->img_seis}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_seis" id="img_seis" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen nro 6</label>
                @if(($grupo->img_siete))
                            <img src="{{asset('storage').'/'.$grupo->img_siete}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                @endif
                <input type="file" class="form-control" name="img_siete" id="img_siete" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
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
