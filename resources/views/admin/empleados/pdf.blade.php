<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Styles -->
 
</head>
<body>


<h3>
    A quien corresponda:
</h3>
<p>
    Por medio de la presente y para los fines que pretenda, hago de su 
    conocimiento que recomiendo al Ingeniero en desarrollo de software multiplataforma <b>{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}</b>,
    que presto servicios en esta empresa desde <b>{{isset($empleado->fecha_ingreso)?$empleado->fecha_ingreso:old('fecha_ingreso')}}</b>
    ya que es una persona honesta y responsable en las actividades que durante el periodo de servicios en nuestra empresa fueron asignados
    por tal motivo no tengo ninguna duda en expedir esta recomendación.
</p>
   
 
<h4 style="text-align: center;">
    Firma
</h4>
<h4 style="text-align: center;">
________________________________
</h4>
<h5 style="text-align: center;">
    Nombre de quien firma
</h5>
<h5 style="text-align: center;">
    UTM
</h5>





</body>
</html>