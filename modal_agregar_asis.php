<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">  
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Asistencia</h4>
      </div> 
                 <div class="modal-body">  
                 <div id="datos_ajax_register"></div>
                           <br/>
                           <label>Fecha Asistencia:</label>  
                           <input type="date" name="fecha" id="fecha" class="form-control" />  
                           <br/> 
                            <SELECT name="hora" class="form-control">
                            <option>Seleccione una Opción...</option>
                            <?php 
                            $conexion=mysql_connect("localhost","root","") or
                            die("Problemas en la conexion");
                            mysql_select_db("planilla_electivo_2",$conexion) or
                            die("Problemas en la selección de la base de datos");  
                            mysql_query ("SET NAMES 'utf8'");
                            $clavebuscadah=mysql_query("select Codigo_Horario_Empleado,hora_entrada from horario_empleado",$conexion) or
                            die("Problemas en el select:".mysql_error());
                            while($row = mysql_fetch_array($clavebuscadah))
                            {
                            echo'<OPTION VALUE="'.$row['Codigo_Horario_Empleado'].'">'.$row['hora_entrada'].'</OPTION>';
                            }

                            ?>
                            </SELECT>
                            <br />
                          
                            <label>Hora de Ingreso:</label>  
                            <input  type="time" name="hora_ingreso" id="hora_ingreso" class="form-control">
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
