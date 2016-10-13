<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
 
        <title>REGISTAR EMPLEADO</title>
    </head>
    <body>
    <HR align="CENTER" size="2" width="400" noshade>
    <div align="CENTER"><font size="4" color="blue">PLANILLA</font></div>
    <div align="CENTER"><font size="4" color="blue">REGISTAR EMPLEADO</font></div>
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
        <h1>REGISTRAR EMPLEADO</h1>
        
        <form class="form-horizontal media-body" method="POST" action="REGISTAR_EMPLEADO.php" name="form1">   
            <label class="control-label col-xs-1">ESTADO:</label>
            <div class="col-xs-1">
            <input type="text" name="estado_ple" class="form-control" value="<?php echo "1";?>" readonly="readonly">
            </div>
            <div class="form-group">
            <label class="control-label col-xs-2">CODIGO EMPLEADO:</label>
            <div class="col-xs-1">
           <input type="text" name="codigo" class="form-control" required>
            </div>
            <label class="control-label col-xs-2">FECHA REGISTRO:</label>
              <div class="col-xs-2">
              <input type="date" name="fecha_NA" class="form-control" >
              </div>
            </div>
            <!-------------------------->
            <div class="form-group">
            <label class="control-label col-xs-2">NOMBRE Y APELLIDOS:</label>
            <div class="col-xs-2">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
             <div class="col-xs-2">
            <input type="text" name="apellido" class="form-control" required>
            </div>
            <label class="control-label col-xs-1">SEXO:</label>
            <div class="col-xs-2">
                <SELECT name="SEXO"class="form-control">
                     <option>Selccione Sexo</option>
                <option value="1">MASCULINO</option>
                <option value="2">FEMENINO</option>
                <option value="4">OTROS</option>
                </SELECT>
              </div>
            <label class="control-label col-xs-1">FOTO:</label>
            <div class="col-xs-1">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
                </div>
            <!--------------------------------->
              <div class="form-group">
              <label class="control-label col-xs-2">FECHA NACIMIENTO:</label>
              <div class="col-xs-2">
              <input type="date" name="fecha_NA" class="form-control" >
              </div>
                       
             <label class="control-label col-xs-1">DOCUMENTO:</label>
                <div class="col-xs-2">
                <SELECT name="DOCUME"class="form-control">
                <option>Selccione Documento</option>
                <option value="1">DNI</option>
                <option value="2">RUT</option>
                <option value="3">LIBRETA MILITAR</option>
                <option value="4">OTROS</option>
                </SELECT>     
            </div>
             <div class="col-xs-2">
             <input type="text" name="DNI" class="form-control" required>
             </div>
               </div>
            <!------------------------------>
           <div class="form-group">
     <label class="control-label col-xs-2">ESTADO CIVIL:</label>
                <div class="col-xs-2">
                <SELECT name="ESTADO"class="form-control">
                <option>Selccione Estado</option>
                <option value="1">CASADO</option>
                <option value="2">SOLTERO</option>
                <option value="3">VIUDO</option>
                <option value="4">SEPARADO</option>
                </SELECT> 
                      </div>
             <label class="control-label col-xs-1">EMAIL:</label>
            <div class="col-xs-1">
            <input type="text" name="EMAIL" class="form-control" required>
            </div>
         
           </div>
            <!-------------------------------->
             <div class="form-group">
               <label class="control-label col-xs-2">DIRECCION:</label>
            <div class="col-xs-2">
            <input type="text" name="DIRE" class="form-control" required>
            </div>
               <label class="control-label col-xs-1">TELEFONO:</label>
            <div class="col-xs-2">
            <input type="text" name="TELE" class="form-control" required>
            </div>
               <label class="control-label col-xs-1">DISCAPACIDAD:</label>
            <div class="col-xs-1">
            <input type="text" name="DISCA" class="form-control" required>
            </div>
            </div>
            <div> 
            <div class="FROM-GROUP">
            <input  class="btn btn-primary btn-lg"type="Submit" name="enviar" value="REGISTRAR">
            <input  class="btn btn-primary btn-lg"type="Submit" name="enviar" value="LIMPIAR">
            </div>
            </div>
   </form> 
    </center>
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>  
    </body>
</html>
