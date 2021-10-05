<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .navbar.navbar-dark {
            box-shadow: rgba(0, 0, 0, 0.1)0 0 10px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark" style="background-color: #01AB79;">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="/">Crud Empleados</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="bg-light p-5 rounded-lg m-3">
                <h1 class="display-4">CRUD EMPLEADOS</h1>
                <p class="lead">
                Tarea de la materia de gestión del proceso de desarrollo de software.
                </p>
                <hr class="my-4">
                
                <p>
                Para entrar al sitio darle click al botón de abajo.
                </p>
                <a class="btn btn-primary btn-lg" href="{{route('empleados.index')}}" role="button">
                    ir al CRUD
                </a>
            </div>
        </div>
    </div>
    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>