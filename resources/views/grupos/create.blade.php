@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Crear un nuevo Grupo</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/grupos') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                <label for="titulo_grupo" class="form-label">Titulo del Grupo</label>
                <input type="text" class="form-control" name="titulo_grupo" id="titulo_grupo" required>
            </div>
            <div class="col-12">
                <label for="descripcion_grupo" class="form-label">Descripcion del grupo</label>
                <input type="text" class="form-control" name="descripcion_grupo" id="descripcion_grupo" required>
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" required>
            </div>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen Nro 1</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen Nro 2</label>
                <input type="file" class="form-control" name="img_dos" id="img_dos" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen Nro 3</label>
                <input type="file" class="form-control" name="img_tres" id="img_tres" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen Nro 4</label>
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen Nro 5</label>
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen Nro 6</label>
                <input type="file" class="form-control" name="img_seis" id="img_seis" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen Nro 7</label>
                <input type="file" class="form-control" name="img_siete" id="img_siete" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_ocho" class="form-label">Imagen Nro 8</label>
                <input type="file" class="form-control" name="img_ocho" id="img_ocho" required accept="image/png, image/jpeg" >
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Datos</button>
                <a href="{{ url('grupos') }}">Regresar a Grupos</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
