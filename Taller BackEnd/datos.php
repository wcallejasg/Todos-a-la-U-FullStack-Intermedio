<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/Style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<style>
		p {
			font-family: 'Mochiy Pop P One', sans-serif;
			padding: 15px;
			color: rgb(255, 255, 255);
			text-align: center;
			font-size: 25px;
			font-weight: bold;
		}
	</style>
</head>
<body>

        <div class="container-fluid St-FondoLogin">
            <div class="row justify-content-center" style="position:relative; padding-top: 1.5rem;">
                <div class="col-sm-8 col-xl-4 St-ContLogin">
                    <div class="row justify-content-center">
                        <h1 class="St-TituloLogin">Registro de datos</h1>
                        <div class="col-8">
                            <img src="img/Datos.jpg" class="img-fluid St-Logo-img" style=" padding-bottom: 10px;">
                        </div>
                        <div class="col-8">
    <?php


        if (isset($_GET['verificar'])) {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cc'];

            echo "<p>Nombre : $nombre<br></p>";
            echo "<p>Apellido : $apellido<br></p>";
            echo "<p>Cédula : $cedula<br></p>";

        }

    ?>
      </div>  

      <div class="btn-group col-xs-12 St-form" role="group" aria-label="Basic outlined example">
        <a href="Datos.html" class="btn btn-secondary" style="border-radius: 5px; margin-top: 15px;">Regresar</a>
        </div> 

    </div>
</div>
      </div>
      </div>    
</body>
