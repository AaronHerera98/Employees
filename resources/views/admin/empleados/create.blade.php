@extends('layouts.admin')
@section('titulo')
Crear empleado
@endsection

@section('contenido')
<div class="row d-flex justify-content-center">

    <div class=" col-6">

        <div class="card">
            <div class="card-header">Datos</div>

            <div class="card-body">
                <!--inicia formulario-->
                <form action="" method="POST" enctype="multipart/form-data">

                    @csrf


                    @include('admin.empleados.form',['modo'=>'Guardar','btnmode'=>'btn btn-success'])


                </form>
            </div>
        </div>
    </div>
</div>

@endsection