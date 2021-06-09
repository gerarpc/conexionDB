<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercion en BD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card col-md-7">
            <div class="card-header">
                Prueba
            </div>
            <div class="card-body">
                <?php
                if (isset($_GET['confirm'])){
                    if ($_GET['confirm'] === "0"){
                        echo '<div class="alert alert-danger" role="alert">Dato no ingresado</div>';
                    }
                    if ($_GET['confirm'] === "1"){
                        echo '<div class="alert alert-success" role="alert">Dato ingresado correctamente</div>';
                    }
                    if ($_GET['confirm'] === "2"){
                        echo '<div class="alert alert-danger" role="alert">Uno o mas campos estan vacios</div>';
                    }
                }

                ?>
                <form action="./config/insertar.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad">
                    </div>
                    <button class="btn btn-primary">Añadir registro</button>
                </form>
                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>