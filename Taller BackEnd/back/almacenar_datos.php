<?php

include '../db/conexion.php';

        if (isset($_POST['almacenar'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $cedula = $_POST['cedula'];

            mysqli_query($conexion,"INSERT INTO usuarios
            (nombre, apellido, cedula) VALUES
            (UPPER('$nombre'), UPPER('$apellido'), '$cedula')");
        }
        header ('location: ../Filtro.php')
?>