

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PLANILLA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" background="" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<html>
    <head>
    <meta charset="UTF-8">
    <title>Pagina de Inicio</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
     <ul class="nav nav-pills nav-justified">
<!--    <li><img src="usp.png" width="50" height="50"></li>-->
         <li><a><img src="inicio.png" href="index.php" width="50" height="50">Inicio</a></li>
   <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="REGE.png" width="50" height="50">
        REGISTAR<span class="caret"></span>
      </a>
   
        <ul class="dropdown-menu">
            <li><a href="REGISTAR_EMPLEADO.php.php">REGISTRAR EMPLEADO</a></li>
            <li><a href="REGISTRAR_PAGO.php">REGISTRAR PAGO</a></li>
            <li><a href="">REGISTRAR HORARIO</a></li>
            <li><a href="REGISTRAR_CONTRATO.php">REGISTRAR CONTRATO</a></li>
      </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="REPO.png" width="50" height="50">
        REPORTE <span class="caret"></span>
      </a>
   
        <ul class="dropdown-menu">
            <li><a href="REPORTE_PLANILLA.php">REPORTE PLANILLA</a></li>
            <li><a href="REPORTE_CONTRATO.php.php">REPORTE CONTRATO</a></li>
             <li><a href="">REPORTE ASISTENCIA</a></li>
            <li><a href="">REPORTE PAGO</a></li>
      </ul>
    </li>
   
  </ul>

<center>
    <img src="planillas.png">
</center>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>    -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
