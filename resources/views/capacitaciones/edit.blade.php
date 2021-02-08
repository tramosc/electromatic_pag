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
            <div class="col-12">
                <label for="link" class="form-label">Link de la imagen</label>
                <input type="text" class="form-control" name="link" id="link" value="{{ $capacitacion->link }}">
            </div>
            <div class="col-2">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ $capacitacion->precio }}">
            </div>
            <br></br>
            <div class="col-md-6">
                <label for="img_portada" class="form-label">Imagen Portada</label>
                <img src="{{asset('storage').'/'.$capacitacion->img_portada}}" width="200">
                <input type="file" class="form-control" name="img_portada" id="img_portada" accept="image/png, image/jpeg" value="">
            </div>

            <hr></hr>
            <h2>Archivos PDF</h2>
            
            <div class="col-md-6">
                <label for="titulo_archivo1" class="form-label">Titulo del archivo 1</label>
                <input type="text" class="form-control" name="titulo_archivo1" id="titulo_archivo1" value="{{ $capacitacion->titulo_archivo1 }}">
            </div>
            <div class="col-md-6">
                <label for="pdf_archivo" class="form-label">Archivo Numero 1</label>
                @if (($capacitacion->pdf_archivo))
                <a href="{{asset('storage').'/'.$capacitacion->pdf_archivo}}" download="">Descargar</a>
                @else                
                    <p>No hay archivo subido </p>
                @endif
                <input type="file" class="form-control" name="pdf_archivo" id="pdf_archivo" accept="application/pdf" value="">
            </div>




            <div class="col-md-6">
                <label for="titulo_archivo2" class="form-label">Titulo del archivo 2</label>
                <input type="text" class="form-control" name="titulo_archivo2" id="titulo_archivo2" value="{{ $capacitacion->titulo_archivo2 }}">
            </div>
            <div class="col-md-6">
                <label for="pdf_archivodos" class="form-label">Archivo Numero 2</label>
                @if (($capacitacion->pdf_archivodos))
                <a href="{{asset('storage').'/'.$capacitacion->pdf_archivodos}}" download="">Descargar</a>
                @else                
                    <p>No hay archivo subido </p>
                @endif
                <input type="file" class="form-control" name="pdf_archivodos" id="pdf_archivodos" accept="application/pdf" value="">
            </div>





            <div class="col-md-6">
                <label for="titulo_archivo3" class="form-label">Titulo del archivo 3</label>
                <input type="text" class="form-control" name="titulo_archivo3" id="titulo_archivo3" value="{{ $capacitacion->titulo_archivo3 }}">
            </div>
            <div class="col-md-6">
                <label for="pdf_archivotres" class="form-label">Archivo Numero 3</label>
                @if (($capacitacion->pdf_archivotres))
                <a href="{{asset('storage').'/'.$capacitacion->pdf_archivotres}}" download="">Descargar</a>
                @else                
                    <p>No hay archivo subido </p>
                @endif
                <input type="file" class="form-control" name="pdf_archivotres" id="pdf_archivotres" accept="application/pdf" value="">
            </div>





            <div class="col-md-6">
                <label for="titulo_archivo4" class="form-label">Titulo del archivo 4</label>
                <input type="text" class="form-control" name="titulo_archivo4" id="titulo_archivo4" value="{{ $capacitacion->titulo_archivo4 }}">
            </div>
            <div class="col-md-6">
                <label for="pdf_archivocuatro" class="form-label">Archivo Numero 4</label>
                @if (($capacitacion->pdf_archivocuatro))
                <a href="{{asset('storage').'/'.$capacitacion->pdf_archivocuatro}}" download="">Descargar</a>
                @else                
                    <p>No hay archivo subido </p>
                @endif
                <input type="file" class="form-control" name="pdf_archivocuatro" id="pdf_archivocuatro" accept="application/pdf" value="">
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
