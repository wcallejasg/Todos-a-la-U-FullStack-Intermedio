<?php 
    error_reporting(0);
    include 'db/conexion.php';
    //Definir las variables que van almacenar los valores que será ingresados a las columnas de la tabla usuarios, se realiza por el método POST
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    

    //Variable sql que almacena la sentencia que se va a realizar en la tabla usuarios ingresando los valores definidos en las variables a mi base de datos

     $sql = "INSERT INTO usuarios (id,nombre,apellido,cedula) VALUES('$id'$nombre','$apellido','$cedula')";

    // // //Condicional donde se cumple las impresiones (echo) siempre y cuando se cumpla lo especificado en el query con los parámetros de conexión de la base de datos y la variable sql

    if (mysqli_query($conn, $sql)) {

    } else {
        echo '<script language="javascript">alert("Apreciado usuario, la cédula ingresada ya se encuentra registrada");window.location.href="formulario.html"</script>';
    }

     
    $sql2 = "SELECT * FROM usuarios";
    $result = mysqli_query($conn,$sql2);
?>
    <link rel="stylesheet" href="Estilos/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <div class="container-fluid St-FondoLogin">
        <div class="row justify-content-center" style="position:relative; padding-top: 1.5rem;">
            <div class="col-sm-12 col-xl-8">
                <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-header St-TituloLogin">
                            Registro de usuarios
                        </div>
                        <div class="card-body">
                            <table class="table table-primary table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Cédula</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while($row = mysqli_fetch_assoc($result)){
                                            $nombre = $row['nombre'];
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']?></td>
                                        <td><?php echo $row['nombre']?></td>
                                        <td><?php echo $row['apellido']?></td>
                                        <td><?php echo $row['cedula']?></td>
                                        
                                        

                                    </tr>

                                    <?php
                                            }
                                    ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="btn-group col-12 St-form" role="group" aria-label="Basic outlined example">
    <button type="button" onclick="enviar()" class="btn btn-primary" style="border-radius: 5px; margin-top: 15px; margin-left: 25%; margin-right: 25%;">Regresar</button>
</div>     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    
    function enviar() {
         window.location.href = "formulario.html";
    }    
        
</script>