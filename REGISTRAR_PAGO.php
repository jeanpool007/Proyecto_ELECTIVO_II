<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
 
        <title>REGISTAR PAGO</title>
    </head>
    <body>
    <HR align="CENTER" size="2" width="400" noshade>
    <div align="CENTER"><font size="4" color="blue">PLANILLA</font></div>
    <div align="CENTER"><font size="4" color="blue">REGISTAR PAGO</font></div>
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
        <h1>REGISTRAR PAGO</h1>
        
        <form class="form-horizontal media-body" method="POST" action="REGISTAR_PAGO.php" name="form1">   
           
            <div class="form-group">
            <label class="control-label col-xs-2">CODIGO EMPLEADO:</label>
            <div class="col-xs-1">
           <input type="text" name="codigo" class="form-control" required>
            </div>
                <label class="control-label col-xs-2">NOMBRE Y APELLIDOS:</label>
            <div class="col-xs-3">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
                <label class="control-label col-xs-1">FOTO:</label>
            <div class="col-xs-1">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
                <div class="col-xs-1">
             <input type="button" class="btn btn-primary" value="..." onclick="popu()">
             </div>
            </div>
            <!-------------------------->
            <div class="form-group">
          <label class="control-label col-xs-2">FECHA PAGO:</label>
              <div class="col-xs-2">
              <input type="date" name="fecha_NA" class="form-control" >
              </div>
            <label class="control-label col-xs-2">CODIGO CONTRATO:</label>
             <div class="col-xs-1">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
            
                </div>
                      
            <!-------------------------------->
             <div class="form-group">
        <label class="control-label col-xs-2">APORTACION:</label>
        <div class="col-xs-1">
        <label><input type="checkbox" id="cbox1" value="first_checkbox"> AFP</label><br>
        <input type="checkbox" id="cbox2" value="second_checkbox"> 
        <label for="cbox2">ONP</label><br/>
        <input type="checkbox" id="cbox3" value="second_checkbox"> 
        <label for="cbox3">    JUD</label><br/>
         <input type="checkbox" id="cbox4" value="second_checkbox"> 
        <label for="cbox4">OTROS</label>
         </div>
        
          <label class="control-label col-xs-1">SUELDO BASICO:</label>
           <div class="col-xs-1">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
          <label class="control-label col-xs-2">DESCUENTO:</label>
           <div class="col-xs-1">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
          <div class="col-xs-1">
             <input type="button" class="btn btn-primary" value="..." onclick="popu()">
             </div>
         
            </div>
            
            <div class="FROM-GROUP">
                 <label class="control-label col-xs-2">BONIFICACION:</label>
           <div class="col-xs-1">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
          <div class="col-xs-1">
             <input type="button" class="btn btn-primary" value="..." onclick="popu()">
             </div>
            <label class="control-label col-xs-2">APORTACION:</label>
           <div class="col-xs-1">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
          <label class="control-label col-xs-2">SUELDO NETO:</label>
           <div class="col-xs-1">
            <input type="text" name="NOMBRE" class="form-control" required>
            </div>
            </div>
            <BR/>
              <BR/>
                <BR/>
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
