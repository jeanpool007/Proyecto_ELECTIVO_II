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
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM  empleado ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'index.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM empleado  order by nombre LIMIT $offset,$per_page");
		
		if ($numrows>0){
			?>
		<table class="table table-bordered">
			  <thead>
				<tr>
                                    
                                                <th>Codigo de Registro</th>		
                                                <th>Fecha de Registro</th>
                                                <th>Nombre Empleado</th>
                                                <th>Apellidos Empleado</th>
                                                <th >Fecha Nacimiento</th>
                                                <th>Sexo</th>
                                                <th>Estado Civil</th>
                                                <th>Direccion Casa</th>
                                                <th>Estado Registro</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($row = mysqli_fetch_array($query)){
                        $Estado_Color= array(
                                            
                                          'R' => 'A6F0A8',  
                                          'I' => 'E9F674',
                                            
                                        );
				?>
			
                                                <tr bgcolor="<?php echo $Estado_Color[$row["Estado_Empleado"]]?>">
                                                <td><?php echo $row["codigo_empleado"]; ?></td>
                                                <td><?php echo $row["fecha_registro"]; ?></td>
						<td><label><a href="#" class="hover" codigo_empleado="<?php echo $row["codigo_empleado"]; ?>"><?php echo $row["nombre"]; ?></a></label></td>
                                                <td><?php echo $row["apellido"]; ?></td>
                                                <td><?php echo $row["fecha_nacimiento"]; ?></td>
                                                <td><?php echo $row["sexo"]; ?></td>
                                                <td><?php echo $row["estado_civil"]; ?></td>
                                                <td><?php echo $row["direccion_casa"]; ?></td>
                                                <td><?php echo $row["Estado_Empleado"]; ?></td>
                                                <td>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['codigo_empleado']?>"  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button>
                                                </td>
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
<script>
	$(document).ready(function(){

		$('.hover').tooltip({
			title: fetchData,
			html: true,
			placement: 'right'
		});

		function fetchData()
		{
			var fetch_data = '';
			var element = $(this);
			var codigo_empleado = element.attr("codigo_empleado");
			$.ajax({
				url:"fetch.php",
				method:"POST",
				async: false,
				data:{codigo_empleado:codigo_empleado},
				success:function(data)
				{
					fetch_data = data;
				}
			});			
			return fetch_data;
		}
	});
</script>