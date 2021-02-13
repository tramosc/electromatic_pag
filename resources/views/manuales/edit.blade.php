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
                <input type="text" class="form-control" name="titulo_manual" id="titulo_manual" value="{{ $manual->titulo_manual }}">
            </div>
            <div class="col-2">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" value="{{ $manual->fecha }}">
            </div>

<hr></hr>

            <div class="col-lg-6">
            <h1 class="align:center">Contenido para la pagina Actual</h1>
                <div class="col-12">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ $manual->descripcion }}">
                </div>
                <div class="col-12">
                    <label for="detalles" class="form-label">Detalles</label>
                    <input type="text" class="form-control" name="detalles" id="detalles" value="{{ $manual->detalles }}">
                </div>
                <div class="col-md-6">
                    <label for="archivo_url" class="form-label">Archivo - Actual</label>
                    @if (($manual->archivo_url))
                    <a href="{{asset('storage').'/'.$manual->archivo_url}}" download="">Descargar</a>
                    @else                
                        <p>No hay archivo subido </p>
                    @endif
                    <input type="file" class="form-control" name="archivo_url" id="archivo_url" accept="application/pdf" value="">
                </div>
                <div class="alert alert-warning" role="alert">
                    <b>Aviso</b>: Llenar estos campos si se quiere dar contenido a la pagina junto con el titulo y Fecha.
            </div>
            </div>

            <div class="col-lg-6">
                <h1 class="align:center">Referencia actual</h1>
                <div class="col-12">
                    <label for="referencias" class="form-label">Referencias</label>
                    <input type="text" class="form-control" name="referencias" id="referencias" value="{{ $manual->referencias }}">
                </div>
                <div class="alert alert-warning" role="alert">
                    <b>Aviso</b>: Llenar este campo si se quiere dar referencias a paginas o articulos de otros medios junto con el titulo y Fecha.
                </div>
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
