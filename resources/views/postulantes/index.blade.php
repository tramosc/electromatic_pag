@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <h1 class="align:center">Postulantes recibidos</h1>
        <i class="bi bi-plus-square-fill"></i>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-success">Ver Datos</button>
                </div>
                </td>
                </tr>
                <tr>

                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-success">Ver Datos</button>
                </div>
                </td>
                </tr>
                <tr>

                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-success">Ver Datos</button>
                </div>
                </td>
                </tr>
                <tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
