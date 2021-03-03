@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1 class="align:center">Crear un nuevo servicio</h1>
        <div class="card" style="width: 70rem;">
        <div class="card-body">
        <form action="{{ url('/servicios') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="col-md-6">
                <label for="titulo_servicios" class="form-label">titulo</label>
                <input type="text" class="form-control" name="titulo_servicios" id="titulo_servicios" required>
            </div>
            <div class="col-md-6">
                <label for="img_portada" class="form-label">Portada</label>
                <input type="file" class="form-control" name="img_portada" id="img_portada" required accept="image/png, image/jpeg">
            </div>
            <div class="col-12">
                <label for="descripcion" class="form-label">Descripcion</label>
                <div class="form-floating">
                <textarea class="form-control"  id="descripcion" name="descripcion" style="height: 100px"></textarea>
                <label for="descripcion">Datos...</label>
                </div>
            </div>  
            <div class="col-md-6">
                <label for="titulo1" class="form-label">Titulo de parrafo 1</label>
                <input type="text" class="form-control" name="titulo1" id="titulo1">
            </div>
            <div class="col-12">
                <label for="parrafo1" class="form-label">Parrafo 1</label>
                <div class="form-floating">
                <textarea class="form-control"  id="parrafo1" name="parrafo1" style="height: 100px"></textarea>
                <label for="parrafo1">Datos...</label>
                </div>
            </div>  
            <div class="col-md-6">
                <label for="titulo2" class="form-label">Titulo de parrafo 2</label>
                <input type="text" class="form-control" name="titulo2" id="titulo2">
            </div>
            <div class="col-12">
                <label for="parrafo2" class="form-label">Parrafo 2</label>
                <div class="form-floating">
                <textarea class="form-control"  id="parrafo2" name="parrafo2" style="height: 100px"></textarea>
                <label for="parrafo2">Datos...</label>
                </div>
            </div>
            <div class="col-md-6">
                <label for="titulo3" class="form-label">Titulo de parrafo 3</label>
                <input type="text" class="form-control" name="titulo3" id="titulo3">
            </div>
            <div class="col-12">
                <label for="parrafo3" class="form-label">Parrafo 3</label>
                <div class="form-floating">
                <textarea class="form-control"  id="parrafo3" name="parrafo3" style="height: 100px"></textarea>
                <label for="parrafo3">Datos...</label>
                </div>
            </div>
            <h1><b>Imagenes para galeria(elementos opcionales)</b></h1>

            <!-- Imagenes  -->
            <div class="col-md-6">
                <label for="img_uno" class="form-label">Imagen Numero 1</label>
                <input type="file" class="form-control" name="img_uno" id="img_uno" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_dos" class="form-label">Imagen Numero 2</label>
                <input type="file" class="form-control" name="img_dos" id="img_dos" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_tres" class="form-label">Imagen Numero 3</label>
                <input type="file" class="form-control" name="img_tres" id="img_tres" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_cuatro" class="form-label">Imagen Numero 4</label>
                <input type="file" class="form-control" name="img_cuatro" id="img_cuatro" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_cinco" class="form-label">Imagen Numero 5</label>
                <input type="file" class="form-control" name="img_cinco" id="img_cinco" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_seis" class="form-label">Imagen Numero 6</label>
                <input type="file" class="form-control" name="img_seis" id="img_seis" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_siete" class="form-label">Imagen Numero 7</label>
                <input type="file" class="form-control" name="img_siete" id="img_siete" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_ocho" class="form-label">Imagen Numero 8</label>
                <input type="file" class="form-constrol" name="img_ocho" id="img_ocho" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-md-6">
                <label for="img_nueve" class="form-label">Imagen Numero 9</label>
                <input type="file" class="form-control" name="img_nueve" id="img_nueve" accept="image/png, image/jpeg">
            </div>
            <hr></hr>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Datos</button>
                <a href="{{ url('servicios') }}">Regresar a Servicios</a>
            </div>

        </form>
        </div>

 

        </div>
    </div>
</div>
@endsection
