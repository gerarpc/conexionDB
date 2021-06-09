<?php
    include_once("DBconect.php");

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['edad'])){
        if($_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['email'] !== "" && $_POST['edad'] !== ""){
            
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];
            
            
            $conexion = new Database;
            $confirm = $conexion->insertar($nombre,$apellido,$edad,$email);
    }else{
        $confirm=2;
    }
}


    header('Location: ../index.php?confirm='.$confirm)
?>