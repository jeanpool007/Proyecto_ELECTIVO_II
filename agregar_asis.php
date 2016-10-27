<?php
    $con = mysqli_connect("localhost", "root", "", "planilla_electivo_2");
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
		 if (empty($_POST['fecha'])){
			$errors[] = "Nombre Vacio";
		} else if (empty($_POST['hora'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['hora_ingreso'])){
			$errors[] = "Moneda vacío";
		} else if (
			!empty($_POST['fecha']) && 
			!empty($_POST['hora']) &&
			!empty($_POST['hora_ingreso'])
                ){
		$fecha = mysqli_real_escape_string($con,(strip_tags ($_POST["fecha"],ENT_QUOTES)));  
                $hora = mysqli_real_escape_string($con,(strip_tags($_POST["hora"],ENT_QUOTES)));  
                $hora2 = mysqli_real_escape_string($con,(strip_tags( $_POST["hora_ingreso"],ENT_QUOTES)));  
		$sql="INSERT INTO asistencia_empleado(Fecha,Codigo_Horario_Empleado,hora_asistencia,estado) 
                VALUES('$fecha', '$hora', '$hora2', '');  
                ";
                $query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>	
