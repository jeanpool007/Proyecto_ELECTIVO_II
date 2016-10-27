<?php

    $con = mysqli_connect("localhost", "root", "", "planilla_electivo_2");
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM  lista_grupos_trabajo ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'index_horarios.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM lista_grupos_trabajo  order by Codigo_Horario_Empleado LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
                                    
                                                <th>Codigo de Empleado</th>		
                                                <th>Turno</th>
                                                <th>Horas de Trabajo</th>
                                                <th>Nombre Grupo Trabajo</th>
                                                <th><font color="green">Hora Entrada</font></th>
                                                <th><font color="blue">Hora Salida</font></th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
                            
                                
                            
				?>
			
                                                <tr>
                                                <td><?php echo $row["Codigo_Horario_Empleado"]; ?></td>
                                                <td><?php echo $row["Turno"]; ?></td>
                                                <td><?php echo $row["Dias_Trabajado"]; ?></td>
                                                <td><?php echo $row["Nombre_Grupo_Trabajo"];?></td>
                                                <td><font color="green"><?php echo $row["hora_entrada"]; ?></font></td>
                                                <td><font color="blue"><?php echo $row["hora_salida"]; ?></font></td>
                                                </tr>
				<?php
			}
			?>
			</tbody>
		</table>
		<div class="table-pagination pull-right">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>
