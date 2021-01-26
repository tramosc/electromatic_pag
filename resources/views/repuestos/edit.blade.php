@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Editar Repuesto Actual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/repuestos/'.$repuesto->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
            <div class="col-md-6">
                <label for="titulo_repuesto" class="form-label">Titulo del Repuesto</label>
                <input type="text" class="form-control" name="titulo_repuesto" id="titulo_repuesto" value="{{ $repuesto->titulo_repuesto }}">
            </div>
            <div class="col-12">
                <label for="descripcion_repuesto" class="form-label">Descripcion Repuesto</label>
                <input type="text" class="form-control" name="descripcion_repuesto" id="descripcion_repuesto" value="{{ $repuesto->descripcion_repuesto }}">
            </div>
            <div class="col-12">
                <label for="detalles_repuesto" class="form-label">Detalles del repuesto</label>
                <input type="text" class="form-control" name="detalles_repuesto" id="detalles_repuesto" value="{{ $repuesto->detalles_repuesto }}">
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ $repuesto->precio }}">
            </div>
            <div class="col-md-6">
                <label for="img_repuesto" class="form-label">Imagen repuesto</label>
                <input type="file" class="form-control" name="img_repuesto" id="img_repuesto" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$repuesto->img_repuesto}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen numero 1</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$repuesto->img_uno}}" width="200">
            </div>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen numero 2</label>
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" value="">
                <img src="{{asset('storage').'/'.$repuesto->img_dos}}" width="200">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <a href="{{ url('repuestos') }}">Regresar a Repuestos</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
