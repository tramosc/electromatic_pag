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
                <label for="titulo_servicios" class="form-label">titulo</label>
                <input type="text" class="form-control" name="titulo_servicios" id="titulo_servicios" required value="{{ $servicio->titulo_servicios }}">
            </div>
            <div class="col-md-6">
                <label for="img_portada" class="form-label">Portada</label>
                <img src="{{asset('storage').'/'.$servicio->img_portada}}" width="200">
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_portada" id="img_portada" required accept="image/png, image/jpeg" value="">
            </div>
            <div class="col-12">
                <label for="definicion" class="form-label">Definicion</label>
                <input type="text" class="form-control" name="definicion" id="definicion" required value="{{ $servicio->definicion }}">
            </div>
            <div class="col-12">
                <label for="caracteristicas" class="form-label">Caracteristicas</label>
                <div class="form-floating">
                <textarea class="form-control"  id="caracteristicas" name="caracteristicas" style="height: 100px" required value="{{ $servicio->caracteristicas }}"></textarea>
                <label for="caracteristicas">Datos...</label>
                </div>
            </div>
            <div class="col-12">
                <label for="importancia" class="form-label">Importancia</label>
                <div class="form-floating">
                <textarea class="form-control"  id="importancia" name="importancia" style="height: 100px" required value="{{ $servicio->importancia }}"></textarea>
                <label for="importancia">Datos...</label>
                </div>
                <br></br>
            </div>

<!-- Imagenes -->
            <h1>Imagenes para galeria</h1>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen 1</label>
                <img src="{{asset('storage').'/'.$servicio->img_uno}}" width="200">
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_uno" id="img_uno" required accept="image/png, image/jpeg" value="">
            </div>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen 2</label>
                <img src="{{asset('storage').'/'.$servicio->img_dos}}" width="200">
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_dos" id="img_dos" required accept="image/png, image/jpeg" value="">
            </div>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen 3</label>
                <img src="{{asset('storage').'/'.$servicio->img_tres}}" width="200">
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_tres" id="img_tres" required accept="image/png, image/jpeg" value="">
            </div>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen 4</label>
                <img src="{{asset('storage').'/'.$servicio->img_cuatro}}" width="200">
                <!-- <a href="{{asset('storage').'/'.$servicio->img_portada}}" download=""> Descargar </a>-->
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" required accept="image/png, image/jpeg" value="">
            </div>
            <br>

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
