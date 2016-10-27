<?php
    $con = mysqli_connect("localhost", "root", "", "planilla_electivo_2");
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
		 if (empty($_POST['nombre'])){
			$errors[] = "Nombre Vacio";
		} else if (empty($_POST['fecha1'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['fecha2'])){
			$errors[] = "Moneda vacío";
		} else if (
			!empty($_POST['nombre']) && 
			!empty($_POST['fecha1']) &&
			!empty($_POST['fecha2'])
                ){
		$nombre = mysqli_real_escape_string($con,(strip_tags ($_POST["nombre"],ENT_QUOTES)));  
                $fecha1 = mysqli_real_escape_string($con,(strip_tags($_POST["fecha1"],ENT_QUOTES)));  
                $fecha2 = mysqli_real_escape_string($con,(strip_tags( $_POST["fecha2"],ENT_QUOTES)));  
		$sql="INSERT INTO vacaciones(Fecha_Inicio,Fecha_Final,Dias_Vacaciones,Codigo_Empleado,Estado) 
                VALUES('$fecha1', '$fecha2','','$nombre', 'R');  
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