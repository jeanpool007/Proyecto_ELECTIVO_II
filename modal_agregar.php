<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">  
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar país</h4>
      </div> 
                <div class="modal-body">  
                     <label>HORA Y FECHA REGISTRO: </label> <?=date('Y/m/d g:ia');?>
                          <br/>
                          <label>Estado de Registro Empleado: </label><font color="green"> R </font> 
                 <div id="datos_ajax_register"></div>
                      
                          
                          <br/>
                          <label>Nombre Empleado</label>  
                          <input type="text" name="nombre" id="nombre" class="form-control" />  
                          <br />  
                          <label>Apellido</label>  
                          <input name="apellido" id="apellido" class="form-control">
                          <br />
                          <label>Fecha Nacimiento</label>  
                          <input  type="date"name="fecha" id="fecha" class="form-control">
                          <br/>
                          <label>Sexo</label>
                           <select name="sexo" id="sexo" class="form-control">  
                               <option value="M">M</option>  
                               <option value="F">F</option>  
                          </select>
                          <br/>
                          <label>Estado Civil</label>
                           <select name="estado_civil" id="estado_civil" class="form-control">  
                               <option value="S">S</option>  
                               <option value="C">C</option>  
                          </select>
                          <br/> 
                           <label>Direccion Casa</label>  
                          <textarea name="direccion" id="direccion" class="form-control"></textarea>  
                          <br/>
                          <label>Numero Telefono</label>  
                          <input  name="telefono" id="telefono" class="form-control">  
                          <br/>
                          <label>Correo Electronico</label>  
                          <textarea name="correo" id="correo" class="form-control"></textarea>  
                          <br/>
                          <label>Tipo de Documento</label>  
                          <select name="tipo" id="tipo" class="form-control">  
                               <option value="DNI">DNI</option>  
                               <option value="libreta">LIBRETA MILITAR</option>  
                          </select>  
                          <br />  
                          <label>Numero Documento</label>  
                          <input type="text" name="numero_documento" id="numero_documento" class="form-control" />  
                          <br/>
                          <label>Discapacidad</label>
                          <div class="radio">
                              <label><input type="radio" name="discapacidad" id="discapacidad">Si</label>
                          </div>
                          <div class="radio">
                              <label><input type="radio" name="discapacidad" id="discapacidad">No</label>
                          </div>
                          <br/>
<!--                          <label>Foto</label>  
                          <input type="file" name="image" id="image" />  
                          <br />  -->
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
