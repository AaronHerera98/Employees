@extends('layouts.admin')


@section('contenido')

@if(Session::has('message'))
<script>
  toastr.options = {
    "closeButton": true,
    "progressBar": true
  }
  toastr.success("{{ session('message') }}");
</script>
@endif


@if(Session::has('error'))
<script>
  toastr.options = {
    "closeButton": true,
    "progressBar": true
  }
  toastr.error("{{ session('error') }}");
</script>
@endif



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
          <th scope="col">fecha de ingreso</th>
          <th>acciones</th>

        </tr>
      </thead>
      <tbody>
        @if(count($employees) > 0)
        @foreach($employees as $empleado)
        <tr>
          <td>
            {{$empleado->id}}
          </td>
          <td>
            {{$empleado->nombre}}
          </td>
          <td>
            {{$empleado->email}}
          </td>
          <td>
            {{$empleado->fecha_ingreso}}
          </td>
          <td>
            <div class="btn-group">
              <a href="{{ route('empleados.edit',$empleado->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <form action="{{ route('empleados.destroy',$empleado->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger">
                  <i class=" fas fa-trash"></i>
                </button>

              </form>
            </div>

          </td>
        </tr>
        @endforeach
        @endif

      </tbody>
    </table>

  </div>
</div>
@endsection