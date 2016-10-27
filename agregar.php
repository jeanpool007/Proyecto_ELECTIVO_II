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
		} else if (empty($_POST['direccion'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['telefono'])){
			$errors[] = "Moneda vacío";
		} else if (empty($_POST['apellido'])){
			$errors[] = "Capital vacío";
		} else if (empty($_POST['correo'])){
			$errors[] = "Continente vacío";
		}   else if (
			!empty($_POST['nombre']) && 
			!empty($_POST['direccion']) &&
			!empty($_POST['telefono']) &&
			!empty($_POST['apellido']) &&
			!empty($_POST['correo'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$name = mysqli_real_escape_string($con,(strip_tags ($_POST["nombre"],ENT_QUOTES)));  
                $apellido = mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES)));  
                $fechanacimiento = mysqli_real_escape_string($con,(strip_tags( $_POST["fecha"],ENT_QUOTES)));  
                $sexo = mysqli_real_escape_string($con, (strip_tags($_POST["sexo"],ENT_QUOTES)));  
                $estado_civil = mysqli_real_escape_string($con,(strip_tags( $_POST["estado_civil"],ENT_QUOTES)));
                $direccion_casa = mysqli_real_escape_string($con,(strip_tags( $_POST["direccion"],ENT_QUOTES)));
                $numero_telefono = mysqli_real_escape_string($con,(strip_tags( $_POST["telefono"],ENT_QUOTES)));
                $correo = mysqli_real_escape_string($con,(strip_tags( $_POST["correo"],ENT_QUOTES)));
                $tipo_documento = mysqli_real_escape_string($con,(strip_tags( $_POST["tipo"],ENT_QUOTES)));
                $discapacidad = mysqli_real_escape_string($con,(strip_tags( $_POST["discapacidad"],ENT_QUOTES)));
                $numero_documento = mysqli_real_escape_string($con,(strip_tags( $_POST["numero_documento"],ENT_QUOTES)));
                $image = mysqli_real_escape_string($con,(strip_tags( $_POST["image"],ENT_QUOTES)));
		$sql="INSERT INTO empleado(fecha_registro,nombre,apellido, fecha_nacimiento, sexo, estado_civil,direccion_casa,numero_telefono,correo_electronico,
                Tipo_Documento,Discapacidad,Numero_Documento,Estado_Empleado)  
                VALUES(CURRENT_TIMESTAMP,'$name', '$apellido', '$fechanacimiento', '$sexo', '$estado_civil','$direccion_casa','$numero_telefono','$correo','$tipo_documento','$discapacidad','$numero_documento','R');  
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