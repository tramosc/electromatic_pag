@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Crear una nueva Capacitacion</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/capacitaciones') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                <label for="titulo_capacitacion" class="form-label">Titulo de la capacitacion</label>
                <input type="text" class="form-control" name="titulo_capacitacion" id="titulo_capacitacion" required>
            </div>
            <div class="col-12">
                <label for="descripcion_capacitacion" class="form-label">Descripcion de la Capacitacion</label>
                <input type="text" class="form-control" name="descripcion_capacitacion" id="descripcion_capacitacion" required>
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" required>
            </div>
            <div class="col-md-6">
                <label for="pdf_archivo" class="form-label">Archivo PDF</label>
                <input type="file" class="form-control" name="pdf_archivo" id="pdf_archivo" required accept="application/pdf" >
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
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Datos</button>
                <a href="{{ url('capacitaciones') }}">Regresar a capacitaciones</a>
            </div>


        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
