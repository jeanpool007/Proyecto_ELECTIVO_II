<form id="guardarDatos" name="sumar">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">  
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Registrar Vacaciones</h4>
      </div> 
                 <div class="modal-body">  
                            <div id="datos_ajax_register"></div>
                           <SELECT name="nombre" class="form-control">
                            <option>Seleccione la Opcion...</option>
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
                            <br/>
                            <label>Fecha Inicio:</label>  
                            <input  type="date" name="fecha1"  class="form-control" onkeyup="fncSumar()"/>
                            <br/>                          
                            <label>Fecha Final :</label>  
                            <input type="date" name="fecha2"  class="form-control" onkeyup="fncSumar()"/>  
                            <br/>
                            <label>Dias Vacaciones:</label>  
                            <input type="text" name="total"  class="form-control" />  
                            <br/>
                </div> 
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar datos</button>
                  </div>
              
           </div>  
          
        
      </div>
    </div>
  </div>
</div>
</form>
<script>
function fncSumar(){
caja=document.forms["sumar"].elements;
var numero1 = Number(caja["fecha1"].value);
var numero2 = Number(caja["fecha2"].value);
resultado=numero1+numero2;
if(!isNaN(resultado)){
caja["total"].value=numero1+numero2;
}
}
</script>


