@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Crear un nuevo UPS</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/ups') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                <label for="titulo_ups" class="form-label">Titulo del UPS</label>
                <input type="text" class="form-control" name="titulo_ups" id="titulo_ups" required>
            </div>
            <div class="col-12">
                <label for="descripcion_ups" class="form-label">Descripcion DEL UPS</label>
                <input type="text" class="form-control" name="descripcion_ups" id="descripcion_ups" required>
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio">
            </div>
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen Portada</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" required accept="image/png, image/jpeg" >
            </div>
            <h3>Imagenes para Zoom (opcionales)</h3>
            <div class="col-md-6">
                <label for="img_zoom1" class="form-label">Imagen Zoom 1</label>
                <input type="file" class="form-control" name="img_zoom1" id="img_zoom1" accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_zoom2" class="form-label">Imagen Zoom 2</label>
                <input type="file" class="form-control" name="img_zoom2" id="img_zoom2" accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_zoom3" class="form-label">Imagen Zoom 3</label>
                <input type="file" class="form-control" name="img_zoom3" id="img_zoom3" accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_zoom4" class="form-label">Imagen Zoom 4</label>
                <input type="file" class="form-control" name="img_zoom4" id="img_zoom4" accept="image/png, image/jpeg" >
            </div>
            <h3>Imagenes para Galeria (Opcional)</h3>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen Nro 1</label>
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen Nro 2</label>
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen Nro 3</label>
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen Nro 4</label>
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen Nro 5</label>
                <input type="file" class="form-control" name="img_seis" id="img_seis" accept="image/png, image/jpeg" >
            </div>
            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen Nro 6</label>
                <input type="file" class="form-control" name="img_siete" id="img_siete" accept="image/png, image/jpeg" >
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Datos</button>
                <a href="{{ url('ups') }}">Regresar a UPS</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
