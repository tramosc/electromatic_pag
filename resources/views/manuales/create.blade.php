@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Crear un nuevo Manual</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/manuales') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                <label for="titulo_manual" class="form-label">Titulo del manual</label>
                <input type="text" class="form-control" name="titulo_manual" id="titulo_manual" required maxlength="191">
            </div>
            <div class="col-2">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" required id="fecha">
            </div>

<hr></hr>
            <div class="col-lg-6">

            <div class="col-12">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" >
            </div>
            <div class="col-12">
                <label for="detalles" class="form-label">Detalles</label>
                <input type="text" class="form-control" name="detalles" id="detalles">
            </div>
            <div class="col-10">
                <label for="archivo_url" class="form-label">Archivo</label>
                <input type="file" class="form-control" name="archivo_url" id="archivo_url" accept="application/pdf" >
            </div>
        
        </div>
            
        <div class="col-lg-6">
            <h1 class="align:center">Referencia a otros medios</h1>
                <div class="col-12">
                    <label for="referencias" class="form-label">Referencias(Link)</label>
                    <input type="text" class="form-control" name="referencias" id="referencias" >
                </div>
        </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Datos</button>
                <a href="{{ url('manuales') }}">Regresar a Manuales</a>
            </div>

        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
