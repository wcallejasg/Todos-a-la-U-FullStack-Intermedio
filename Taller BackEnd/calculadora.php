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
                        <h1 class="St-TituloLogin">Resultado de la operación</h1>
                        <div class="col-8">
                            <img src="img/Logo.png" class="img-fluid St-Logo-img" style=" padding-bottom: 10px;">
                        </div>
                        <div class="col-8">
						<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$operacion = $_POST["operacion"];

		switch ($operacion) {
			case 'suma':
				$resultado = $num1 + $num2;
				echo "<p>$num1 + $num2 = $resultado</p>";
				break;

			case 'resta':
				$resultado = $num1 - $num2;
				echo "<p>$num1 - $num2 = $resultado</p>";
				break;

			case 'multiplicacion':
				$resultado = $num1 * $num2;
				echo "<p>$num1 x $num2 = $resultado</p>";
				break;

			case 'division':
				if ($num2 != 0) {
					$resultado = $num1 / $num2;
					echo "<p>$num1 / $num2 = $resultado</p>";
				} else {
					echo "<p>Error: no se puede dividir entre cero</p>";
					
				}
			break;

			
		}

		
		
	?>
                        
	<div class="btn-group col-12 St-form" role="group" aria-label="Basic outlined example">
		<a href="Calculadora.html" class="btn btn-secondary" style="border-radius: 5px; margin-left: 10%; margin-right: 10%;">Regresar</a>
	</div>
</body>

