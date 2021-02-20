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
            <div class="col-12">
                <label for="link" class="form-label">Link para la Imagen Portada</label>
                <input type="text" class="form-control" name="link" id="link">
            </div>
            <div class="col-md-6">
                <label for="img_portada" class="form-label">Imagen Portada</label>
                <input type="file" class="form-control" name="img_portada" id="img_portada" required accept="image/png, image/jpeg" >
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio">
            </div>

            <hr></hr>
            <h2>Archivos PDF</h2>
            <div class="col-md-6">
                <label for="titulo_archivo1" class="form-label">Titulo del archivo 1</label>
                <input type="text" class="form-control" name="titulo_archivo1" id="titulo_archivo1">
            </div>
            <div class="col-md-6">
                <label for="pdf_archivo" class="form-label">Archivo PDF 1</label>
                <input type="file" class="form-control" name="pdf_archivo" id="file" accept="application/pdf" >
            </div>

            <hr></hr>

            <div class="col-md-6">
                <label for="titulo_archivo2" class="form-label">Titulo del archivo 2</label>
                <input type="text" class="form-control" name="titulo_archivo2" id="titulo_archivo2">
            </div>
            <div class="col-md-6">
                <label for="pdf_archivodos" class="form-label">Archivo PDF 2</label>
                <input type="file" class="form-control" name="pdf_archivodos" id="file2" accept="application/pdf" >
            </div>

            <hr></hr>

            <div class="col-md-6">
                <label for="titulo_archivo3" class="form-label">Titulo del archivo 3</label>
                <input type="text" class="form-control" name="titulo_archivo3" id="titulo_archivo3">
            </div>
            <div class="col-md-6">
                <label for="pdf_archivotres" class="form-label">Archivo PDF 3</label>
                <input type="file" class="form-control" name="pdf_archivotres" id="file3" accept="application/pdf" >
            </div>

            <hr></hr>

            <div class="col-md-6">
                <label for="titulo_archivo4" class="form-label">Titulo del archivo 4</label>
                <input type="text" class="form-control" name="titulo_archivo4" id="titulo_archivo4">
            </div>
            <div class="col-md-6">
                <label for="pdf_archivocuatro" class="form-label">Archivo PDF 4</label>
                <input type="file" class="form-control" name="pdf_archivocuatro" id="file4" accept="application/pdf" >
            </div>


            <script>

                var uploadField = document.getElementById("file");

                    uploadField.onchange = function() {
                        if(this.files[0].size > 32000000){
                        alert("El archivo es muy grande. Tamaño maximo 32MB");
                        this.value = "";
                        };
                    };
                
                    var uploadField2 = document.getElementById("file2");

                    uploadField2.onchange = function() {
                        if(this.files[0].size > 32000000){
                        alert("El archivo es muy grande. Tamaño maximo 32MB");
                        this.value = "";
                        };
                    };

                    var uploadField3 = document.getElementById("file3");

                    uploadField3.onchange = function() {
                        if(this.files[0].size > 32000000){
                        alert("El archivo es muy grande. Tamaño maximo 32MB");
                        this.value = "";
                        };
                    };

                    var uploadField4 = document.getElementById("file4");

                    uploadField4.onchange = function() {
                        if(this.files[0].size > 32000000){
                        alert("El archivo es muy grande. Tamaño maximo 32MB");
                        this.value = "";
                        };
                    };

            </script>

            <hr></hr>
     
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
