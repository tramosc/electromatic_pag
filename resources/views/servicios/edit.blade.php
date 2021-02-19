@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar servicio actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">

        <form action="{{ url('/servicios/'.$servicio->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_servicios" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo_servicios" id="titulo_servicios" value="{{ $servicio->titulo_servicios }}">
            </div>
            <div class="col-md-6">
                <label for="img_portada" class="form-label">Portada</label>
                <img src="{{asset('storage').'/'.$servicio->img_portada}}" width="200">
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_portada" id="img_portada" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="titulo1" class="form-label">Subtitulo1</label>
                <input type="text" class="form-control" name="titulo1" id="titulo1" value="{{ $servicio->titulo1 }}">
            </div>
            <div class="col-12">
                <label for="parrafo1" class="form-label">Parrafo 1</label>
                <div class="form-floating">
                <textarea class="form-control"  id="parrafo1" name="parrafo1" style="height: 100px" value="{{ $servicio->parrafo1 }}">{{ $servicio->parrafo1 }}</textarea>
                <label for="parrafo1">Datos...</label>
                </div>
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="titulo2" class="form-label">Subtitulo2</label>
                <input type="text" class="form-control" name="titulo2" id="titulo2" value="{{ $servicio->titulo2 }}">
            </div>
            <div class="col-12">
                <label for="parrafo2" class="form-label">Parrafo 2</label>
                <div class="form-floating">
                <textarea class="form-control"  id="parrafo2" name="parrafo2" style="height: 100px" value="{{ $servicio->parrafo2 }}">{{ $servicio->parrafo2 }}</textarea>
                <label for="parrafo2">Datos...</label>
                </div>
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="titulo3" class="form-label">Subtitulo3</label>
                <input type="text" class="form-control" name="titulo3" id="titulo3" value="{{ $servicio->titulo3 }}">
            </div>
            <div class="col-12">
                <label for="parrafo3" class="form-label">Parrafo 3</label>
                <div class="form-floating">
                <textarea class="form-control"  id="parrafo3" name="parrafo3" style="height: 100px" value="{{ $servicio->parrafo3 }}">{{ $servicio->parrafo3 }}</textarea>
                <label for="parrafo3">Datos...</label>
                </div>
                <br></br>
            </div>
            <hr></hr>
            <h1>GALERIA DE IMAGENES (Opcional)</h1>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen 1:</label>
                    @if(($servicio->img_uno))
                            <img src="{{asset('storage').'/'.$servicio->img_uno}}" width="200">
                        @else
                        <p><b>No hay Imagen</b></p>
                    @endif
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen 2:</label>
                @if(($servicio->img_dos))
                        <img src="{{asset('storage').'/'.$servicio->img_dos}}" width="200">
                    @else
                        <p><b>No hay Imagen</b></p>
                @endif
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen 3:</label>
                @if(($servicio->img_tres))
                        <img src="{{asset('storage').'/'.$servicio->img_tres}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen 4:</label>
                @if(($servicio->img_cuatro))
                        <img src="{{asset('storage').'/'.$servicio->img_cuatro}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen 5:</label>
                @if(($servicio->img_cinco))
                    <img src="{{asset('storage').'/'.$servicio->img_cinco}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen 6:</label>
                @if(($servicio->img_seis))
                        <img src="{{asset('storage').'/'.$servicio->img_seis}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_seis" id="img_seis" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen 7:</label>
                @if(($servicio->img_siete))
                        <img src="{{asset('storage').'/'.$servicio->img_siete}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif
                
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_siete" id="img_siete" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_ocho" class="form-label">Imagen 8:</label>
                @if(($servicio->img_ocho))
                        <img src="{{asset('storage').'/'.$servicio->img_ocho}}" width="200">
                    @else
                    <p><b>No hay Imagen</b></p>
                @endif

                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_ocho" id="img_ocho" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_nueve" class="form-label">Imagen 9:</label>
                @if(($servicio->img_nueve))
                        <img src="{{asset('storage').'/'.$servicio->img_nueve}}" width="200">
                    @else
                        <p><b>No hay Imagen</b></p>
                @endif
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_nueve" id="img_nueve" accept="image/png, image/jpeg" value="">
            </div>
            <hr></hr>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a class="btn btn-danger" href="{{ url('servicios') }}">Regresar a Servicios</a>
            </div>
        </form>

        </div>

 

        </div>
    </div>
    <br>
    <!-- 
    <h1 style="text-align: center;">Imagenes para la Galeria</h1>
    <h3>Imagenes actuales:</h3>
    <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="" width="200"> 
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2>imagen_galeria 2 </h2>     
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2>imagen_galeria 3 </h2>     
                    </div>
                </div>
    <br>

    <div class="col-6">
    <a class="btn btn-primary btn-lg btn-block" href="{{ url('imagenesGaleria/'.$servicio->id) }}" role="button">Ir a Imagenes de Galeria</a>
     ---- form method="POST" action="{{ url('/servicios/'.$servicio->id) }}"> ---
    </div>
-->
</div>
@endsection
