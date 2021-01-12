@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Ver Postulante Actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">


        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Informacion:</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{$postulante->nombre}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellidos:</strong>
                {{$postulante->nombre}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>DNI:</strong>
                {{$postulante->dni}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefono:</strong>
                {{$postulante->telefono}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                {{$postulante->correo}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Archivo CV (descarga):</strong>
                <br></br>
                <div class="about-img">
                                <a href="{{asset('storage').'/'.$postulante->cv}}" download><img src="{{ asset('img/pdf.png') }}" alt="Image" height="200" width="180"></a>
                </div>
            </div>
        </div>

    </div>
        

            <div class="col-12">
                <a class="btn btn-primary btn-lg btn-block" href="{{ url('postulantes') }}">Regresar a Postulantes</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
