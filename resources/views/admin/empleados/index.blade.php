@extends('layouts.admin')


@section('contenido')
<div class="row">
  <div class="col-2">
    <a href="{{route('empleados.create')}}" class="btn btn-primary">Agregar</a>
  </div>
</div>
<br>
<br>
<!--seccion de la tabla-->
<div class="row">
  <div class="col-12">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Correo</th>
          <th scope="col">fecha</th>
          <th>acciones</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>
            <button class="btn btn-danger">eliminar</button>
            <button class="btn btn-warning">editar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>
            <button class="btn btn-danger">eliminar</button>
            <button class="btn btn-warning">editar</button>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
          <td>
            <button class="btn btn-danger">eliminar</button>
            <button class="btn btn-warning">editar</button>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
</div>
@endsection