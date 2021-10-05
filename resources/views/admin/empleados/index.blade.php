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
  <div class="bg-light p-5 rounded-lg m-3">
    <h1 class="display-4">Listado de empleados.</h1>

    <a class="btn btn-primary btn-lg" href="{{route('empleados.create')}}" role="button">
      Registrar empleado
    </a>
  </div>
</div>
<br>

<!--seccion de la tabla-->
<div class="row">
  <div class="col-12">
    @if(count($employees) > 0)
    <table class="table table-striped">
      <thead class="bg-dark">
        <tr class="text-white">
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
              <a href="{{ route('empleados.edit',$empleado->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
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
    {!! $employees->links()!!}
    @else
    <div class="alert alert-secondary" role="alert">
      Aún no hay empleados registrados, para agregar uno, selecciona el botón de agregar.

    </div>

    @endif

  </div>
</div>
@endsection