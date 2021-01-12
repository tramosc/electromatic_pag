@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Crear un nuevo Repuesto</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/repuestos') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                <label for="titulo_repuesto" class="form-label">Titulo del Repuesto</label>
                <input type="text" class="form-control" name="titulo_repuesto" id="titulo_repuesto" required>
            </div>
            <div class="col-12">
                <label for="descripcion_repuesto" class="form-label">Descripcion Repuesto</label>
                <input type="text" class="form-control" name="descripcion_repuesto" id="descripcion_repuesto" required>
            </div>
            <div class="col-12">
                <label for="detalles_repuesto" class="form-label">Detalles del repuesto</label>
                <input type="text" class="form-control" name="detalles_repuesto" id="detalles_repuesto" required>
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" required>
            </div>
            <div class="col-md-6">
                <label for="img_repuesto" class="form-label">Imagen repuesto</label>
                <input type="file" class="form-control" name="img_repuesto" id="img_repuesto" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Datos</button>
                <a href="{{ url('repuestos') }}">Regresar a Manuales</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
