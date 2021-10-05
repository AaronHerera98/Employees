<!--para los errores-->


<div class="form-group">
    <label for="">Nombre y apellido:</label>
    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Juan Perez" aria-describedby="helpId">

</div>
<div class="form-group">
    <label for="">Correo:</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@ejemplo" aria-describedby="helpId">

</div>
<div class="form-group">
    <label for="">Fecha:</label>
    <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="yy-mm-dd"  class="form-control">

</div>

<br>

<button class="{{$btnmode}}" type="submit">
    {{$modo}}
    empleado
</button>