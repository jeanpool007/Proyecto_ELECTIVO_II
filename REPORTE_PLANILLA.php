<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE PLANILLA</title>
<link href="css/estilo.css" rel="stylesheet">
<script src="js/jquery_1.js"></script>
<script src="js/myjava.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <HR align="CENTER" size="2" width="400" noshade>
    <div align="CENTER"><font size="4" color="blue">PLANILLA</font></div>
    <div align="CENTER"><font size="4" color="blue">REPORTE DE PLANILLA</font></div>
    <HR align="CENTER" size="3" width="500" color="Red" noshade>
    <ul class="nav nav-pills nav-justified">

         <li><a><img src="inicio.png" href="index.php" width="50" height="50">Inicio</a></li>
   <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="REGE.png" width="50" height="50">
        REGISTAR<span class="caret"></span>
      </a>
   
        <ul class="dropdown-menu">
            <li><a href="REGISTAR_EMPLEADO.php">REGISTRAR EMPLEADO</a></li>
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
            <li><a href="REPORTE_PLANILLA.PHP">REPORTE PLANILLA</a></li>
            <li><a href="REPORTE_CONTRATO.PHP">REPORTE CONTRATO</a></li>
             <li><a href="REPORTE_ASITENCIA.php">REPORTE ASISTENCIA</a></li>
            <li><a href="REPORTE_PAGO.php">REPORTE PAGO</a></li>
      </ul>
    </li>
   
    </ul>
    <header>REPORTE DE PLANILLA</header>
    <section>
        <center>
    <table border="0" align="center">
    	<tr>
            <td width="335"><input type="text" placeholder="Busca Planilla" id="bs-prod"/></td>
            <td><input type="date" id="bd-desde"/></td>
            <td>Hasta&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="date" id="bd-hasta"/></td>

        </tr>
    </table>
        </center>
    </section>

    <div class="registros" id="agrega-registros"></div>
    <center>
        <ul class="pagination" id="pagination"></ul>
    </center>

     <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>  
      

</body>
</html>


