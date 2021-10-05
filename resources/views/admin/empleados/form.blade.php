<!--para los errores-->


<div class="form-group">
    <label for="">Nombre y apellido:</label>
    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Juan Perez" value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}">

</div>
<div class="form-group">
    <label for="">Correo:</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@ejemplo" aria-describedby="helpId" value="{{isset($empleado->email)?$empleado->email:old('email')}}">

</div>



@if(isset($empleado->fecha_ingreso))
<div class="form-group">
    <label for="">Fecha:</label>
    <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="yy-mm-dd"  class="form-control">

</div>
@else
<div class="form-group">
    <label for="">Fecha:</label>
    <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="{{isset($empleado->fecha_ingreso)?$empleado->fecha_ingreso:old('fecha_ingreso')}}"  class="form-control">

</div>
@endif

<br>

<button class="{{$btnmode}}" type="submit">
    {{$modo}}
    empleado
</button>