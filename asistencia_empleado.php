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
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM  v_asistencia ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'index_asistencia.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM v_asistencia  order by Codigo_Asistencia_Empleado LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
                                                <th>Codigo Asistencia</th>		
                                                <th>Fecha de Asistencia</th>
                                                <th>Hora de Entrada</th>
                                                <th>Hora de Ingreso del Empleado</th>
                                                <th>Estado de Ingreso</th>
                                              
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
                                        $Estado_Color= array(   
                                          'Tardanza' => 'F47F7F',  
                                          'Hora Entrada Normal' => '94F08D',
                                          ''=>''
                                            
                                        );
				?>
			
                                                <tr bgcolor="<?php echo $Estado_Color[$row["estado"]]?>">
                                                <td><?php echo $row["Codigo_Asistencia_Empleado"]; ?></td>
                                                <td><?php echo $row["Fecha"]; ?></td>
                                                <td><?php echo $row["hora_entrada"]; ?></td>
                                                <td><?php echo $row["hora_asistencia"];?></td>
                                                <td><?php echo $row["estado"]; ?></td>
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
