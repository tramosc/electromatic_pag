@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Capacitacion Actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/capacitaciones/'.$capacitacion->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_capacitacion" class="form-label">Titulo de la capacitacion</label>
                <input type="text" class="form-control" name="titulo_capacitacion" id="titulo_capacitacion" value="{{ $capacitacion->titulo_capacitacion }}">
            </div>
            <div class="col-12">
                <label for="descripcion_capacitacion" class="form-label">Descripcion de la capacitacion</label>
                <input type="text" class="form-control" name="descripcion_capacitacion" id="descripcion_capacitacion" value="{{ $capacitacion->descripcion_capacitacion }}">
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ $capacitacion->precio }}">
            </div>
            <br></br>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen Nro 1</label>
                <img src="{{asset('storage').'/'.$capacitacion->img_uno}}" width="200">
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg" value="">
                
            </div>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen Nro 2</label>
                <img src="{{asset('storage').'/'.$capacitacion->img_dos}}" width="200">
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" value="">
               
            </div>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen Nro 3</label>
                <img src="{{asset('storage').'/'.$capacitacion->img_tres}}" width="200">
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg" value="">
                
            </div>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen Nro 4</label>
                <img src="{{asset('storage').'/'.$capacitacion->img_cuatro}}" width="200">
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg" value="">
                
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a href="{{ url('capacitaciones') }}">Regresar a Capacitaciones</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
