<?php 
if(isset($_POST["enviar"])){
   $codigo_unico=$_POST["codigo_unico"];
   $periodo=$_POST["periodo"];
   $fecha = $_POST["fecha_emision"];
   $fecha1=date("d/m/Y",strtotime($fecha)); 
   $fecha2 = $_POST["fecha_pago"];
   $fecha_2=date("d/m/Y",strtotime($fecha2)); 
   $comprobante=$_POST["comprobante"];
   $serie=$_POST["serie"];
   $numero=$_POST["numero"];
   $tipo_identidad=$_POST["identidad"];
   $codigo_cliente=$_POST["codigo_cliente"];
   $base=$_POST["base"];
   $tipo=$_POST["tipo_cambio"];
   $moneda=$_POST["moneda"];
   $importe_operacion=$_POST["importe_operacion"];
   $isc=$_POST["isc"];
   $igv=$_POST["igv"];
   $otros=$_POST["otros"];
   $importe_total=$_POST["importe_total"];
   $link = mysql_connect("localhost","root");
   mysql_select_db("libros_electronicos",$link);
   $sql = "INSERT INTO ventas(codigo_unico,periodo,fecha_emision,fecha_pago,id_comprobante_pago,serie_comprobante,numero_comprobante,tipo,id_cliente,base_imponible,tipo_cambio,cod_moneda,importe_operacion,isc,igv,otros,importe_total)".
     "VALUES ('$codigo_unico',$periodo,'$fecha','$fecha2','$comprobante','$serie','$numero',$tipo_identidad,'$codigo_cliente','$base','$tipo','$moneda',$importe_operacion,'$isc','$igv','$otros','$importe_total')";
   mysql_query($sql,$link);
}
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
    <h1>PAGO EMPLEADO</h1>
    <form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre Empleado:</label>
        <div class="col-xs-3">
                    <SELECT name="hora" class="form-control">
                            <option>Seleccione al Empleado...</option>
                            <?php 
                            $conexion=mysql_connect("localhost","root","") or
                            die("Problemas en la conexion");
                            mysql_select_db("planilla_electivo_2",$conexion) or
                            die("Problemas en la selección de la base de datos");  
                            mysql_query ("SET NAMES 'utf8'");
                            $clavebuscadah=mysql_query("select codigo_empleado,nombre from empleado",$conexion) or
                            die("Problemas en el select:".mysql_error());
                            while($row = mysql_fetch_array($clavebuscadah))
                            {
                            echo'<OPTION VALUE="'.$row['codigo_empleado'].'">'.$row['nombre'].'</OPTION>';
                            }

                            ?>
        </SELECT>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Periodo:</label>
        <div class="col-xs-3">
            <select class="form-control">
            <option>Mensual</option>
            <option>Quincenal</option>
            <option>Semanal</option>
          </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Concepto Ingresos:</label>
        <div class="col-xs-3">
        <SELECT name="hora" class="form-control">
                            <option>Seleccione una Opción...</option>
                            <?php 
                            $conexion=mysql_connect("localhost","root","") or
                            die("Problemas en la conexion");
                            mysql_select_db("planilla_electivo_2",$conexion) or
                            die("Problemas en la selección de la base de datos");  
                            mysql_query ("SET NAMES 'utf8'");
                            $clavebuscadah=mysql_query("select Codigo_Concepto_Ingresos,Descripcion_Ingresos from concepto_ingresos",$conexion) or
                            die("Problemas en el select:".mysql_error());
                            while($row = mysql_fetch_array($clavebuscadah))
                            {
                            echo'<OPTION VALUE="'.$row['Codigo_Concepto_Ingresos'].'">'.$row['Descripcion_Ingresos'].'</OPTION>';
                            }

                            ?>
        </SELECT>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Concepto de Egresos:</label>
        <div class="col-xs-3">
                   <SELECT name="hora" class="form-control">
                            <option>Seleccione una Opción...</option>
                            <?php 
                            $conexion=mysql_connect("localhost","root","") or
                            die("Problemas en la conexion");
                            mysql_select_db("planilla_electivo_2",$conexion) or
                            die("Problemas en la selección de la base de datos");  
                            mysql_query ("SET NAMES 'utf8'");
                            $clavebuscadah=mysql_query("select Codigo_Concepto_Egresos,Descripcion from concepto_egresos",$conexion) or
                            die("Problemas en el select:".mysql_error());
                            while($row = mysql_fetch_array($clavebuscadah))
                            {
                            echo'<OPTION VALUE="'.$row['Codigo_Concepto_Egresos'].'">'.$row['Descripcion'].'</OPTION>';
                            }

                            ?>
        </SELECT> 
        </div>
    </div>
        <div class="form-group">
        <label class="control-label col-xs-3">Sueldo:</label>
        <div class="col-xs-3">
         <input type="text" class="form-control" id="sueldo" placeholder="Sueldo">
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Registrar">
        </div>
    </div>
</form>
             
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>


