<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
 
        <title>REGISTAR CONTRATO</title>
    </head>
    <body>
    <HR align="CENTER" size="2" width="400" noshade>
    <div align="CENTER"><font size="4" color="blue">PLANILLA</font></div>
    <div align="CENTER"><font size="4" color="blue">REGISTAR CONTRATO</font></div>
    <HR align="CENTER" size="3" width="500" color="Red" noshade>
    <body  style="background-repeat:no-repeat"   >
    <ul class="nav nav-pills nav-justified">
     <ul class="nav nav-pills nav-justified">
<!--    <li><img src="usp.png" width="50" height="50"></li>-->
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
    <center>
        <h1>REGISTRAR CONTRATO</h1>
        
        <form class="form-horizontal media-body" method="POST" action="REGISTAR_CONTRATO.php" name="form1">   
            <div class="form-group">
            <label class="control-label col-xs-2">CODIGO CONTRATO:</label>
            <div class="col-xs-1">
           <input type="text" name="codigo" class="form-control" required>
            </div>
            <label class="control-label col-xs-2">FECHA INICIO:</label>
              <div class="col-xs-2">
              <input type="date" name="fecha_IN" class="form-control" >
              </div><label class="control-label col-xs-2">FECHA FIN:</label>
              <div class="col-xs-2">
              <input type="date" name="fecha_FI" class="form-control" >
              </div>
            </div>
            <!-------------------------->
            <div class="form-group">
                <label class="control-label col-xs-2">CODIGO EMPLEADO:</label>
            <div class="col-xs-1">
           <input type="text" name="codigo_E" class="form-control" required>
            </div>
            <label class="control-label col-xs-2">NOMBRE Y APELLIDOS:</label>
            <div class="col-xs-3">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
             <div class="col-xs-1">
             <input type="button" class="btn btn-primary" value="...Busqueda" onclick="popu()">
             </div>
                </div>
            <!--------------------------------->
              <div class="form-group">
             <label class="control-label col-xs-2">TIPO CONTRATO:</label>
                <div class="col-xs-2">
                <SELECT name="DOCUME"class="form-control">
                <option>Selccione Contrato</option>
                <option value="1">INDEFINIDO</option>
                <option value="2">TEMPORAL</option>
                <option value="3">FORMACION Y APRENDIZAJE</option>
                <option value="4">PRACTICA</option>
                </SELECT>     
            </div>
             <label class="control-label col-xs-2">AREA DE TRABAJO:</label>
                <div class="col-xs-2">
                <SELECT name="DOCUME"class="form-control">
                <option>Selccione Contrato</option>
                <option value="1">PLANTA</option>
                <option value="2">MATENIMIENTO</option>
                <option value="3">SERVICIO</option>
                <option value="4">OTROS</option>
                </SELECT>     
            </div>
               </div>
            <!------------------------------>
           <div class="form-group">
               <label class="control-label col-xs-2">SUELDO BASICO:</label>
            <div class="col-xs-1">
            <input type="text" name="SUELDO" class="form-control" required>
            </div>
               <label class="control-label col-xs-2">HORARIO:</label>
            <div class="col-xs-1">
            <input type="text" name="HORA" class="form-control" required>
            </div>
                 <div class="col-xs-1">
             <input type="button" class="btn btn-primary" value="...Busqueda" onclick="popu()">
             </div>
     <label class="control-label col-xs-2">ESTADO CONTRATO:</label>
                <div class="col-xs-2">
                <SELECT name="EST_CON"class="form-control">
                <option>Selccione Estado</option>
                <option value="1">ACTIVO</option>
                <option value="2">INACTIVO</option>
                <option value="3">OTRO</option>
                </SELECT> 
                      </div>
           </div>
            
            <br> 
            <div class="FROM-GROUP">
            <input  class="btn btn-primary btn-lg"type="Submit" name="enviar" value="REGISTRAR">
            <input  class="btn btn-primary btn-lg"type="Submit" name="enviar" value="LIMPIAR">
            </div>
          
   </form> 
    </center>
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>  
    </body>
</html>
