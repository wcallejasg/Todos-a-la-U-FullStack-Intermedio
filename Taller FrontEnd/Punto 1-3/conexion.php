<?php
$usuario='root';
$clave=''; 
$servidor='localhost';
$baseDeDatos='contactos';

//Variable conn que almacenará la conexión al usuario,clave,servidor y base de datos que definamos en la variable $baseDeDatos

$conn=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    //Condicional donde si el resultado es diferente a la variable $conn (!=$conn) arrojará un mensaje mediante un echo

    if(!$conn){
        echo"problema de conexion";
    }
?>    