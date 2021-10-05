@extends('layouts.admin')
@section('titulo')
Crear empleado
@endsection

@section('contenido')
<div class="row">
    <div class="col-2">
    <a href="{{route('empleados.index')}}" class="btn btn-secondary"><i class="fas fa-hand-point-left"></i> regresar</a>

    </div>
</div>
<br>
<br>
<div class="row">
@if(count($errors)>0)


@foreach($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> {{$error}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach



@endif
</div>
<div class="row d-flex justify-content-center">

    <div class=" col-6">

        <div class="card">
            <div class="card-header">Datos</div>

            <div class="card-body">
                <!--inicia formulario-->
                <!--lo mando a index por que en route:list /empleados es para acceder al store entonces como esta es una ruta y no una url lo mando a empleados.index y no admin/empleados-->
                <form action="{{ route('empleados.index') }}" method="POST" enctype="multipart/form-data">

                    @csrf


                    @include('admin.empleados.form',['modo'=>'Guardar','btnmode'=>'btn btn-success'])


                </form>
            </div>
        </div>
    </div>
</div>

@endsection