<?php
include 'conexion.php';

$query = mysqli_query($conexion,"SELECT * FROM usuarios");
$query2 = mysqli_query($conexion,"SELECT cedula FROM usuarios");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
    $search = $_POST["search"];

    // Realizar consulta filtrada en la base de datos
    $query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre LIKE '%$search%' OR apellido LIKE '%$search%' OR cedula LIKE '%$search%'");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style_datos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>Tabla Usuarios</title>
</head>
<body>
    
    <link rel="stylesheet" href="Estilos/Style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <div class="container-fluid">
            <div class="row justify-content-center" style="position:relative; padding-top: 1.5rem;">
                <div class="col-sm-12 col-xl-8">
                    <div class="">
                        <div class="card">
                            <div class="card-header St-TituloLogin">
                                Tabla de Usuarios
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="search">Buscar:</label>
                                        <input type="text" class="form-control" id="search" name="search" placeholder="Ingrese un nombre" onkeyup="filterTable()">
                                    </div>
                                </form>
                                <br>
                                <table class="table table-primary table-striped">
                                    <thead>
                                    <tr  class="myHead">
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Cédula</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tableBody">

                                    <?php
                                    $count = 1;
                                    while ($datos = mysqli_fetch_array($query)) {
                                        $id = $datos['id'];
                                        $nombre = $datos['nombre'];
                                        $apellido = $datos['apellido'];
                                        $cedula = $datos['cedula'];

                                        echo'
                                        <tr data-url="FQS7i2z1CoA">
                                            <td>'.$id.'</td>
                                            <td>'.$nombre.'</td>
                                            <td>'.$apellido.'</td>
                                            <td>'.$cedula.'</td>
                                        </tr>
                                        ';
                                        $count++;
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function filterTable() {
                var input, filter, table, tbody, tr, td, i, txtValue;
                input = document.getElementById("search");
                filter = input.value.toUpperCase();
                table = document.getElementById("tableBody");
                tr = table.getElementsByTagName("tr");

                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1]; // Filtrar por la tercera columna (nombre)
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                            ;
                        }
                    }
                }
            }
        </script>
</body>
</html>


