<?php
if(isset($_POST["codigo_empleado"]))
{
	$connect = mysqli_connect("localhost", "root", "", "planilla_electivo_2");
	$output = '';
	$query = "SELECT * FROM empleado WHERE codigo_empleado='".$_POST["codigo_empleado"]."'";
	$result = mysqli_query($connect, $query);
	while($row = mysqli_fetch_array($result))
	{
		$output = '
		<p><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  </p>
		<p><label>Numero Telefono : </label>'.$row['numero_telefono'].'</p>
                <p><label>Correo Electronico : </label>'.$row['correo_electronico'].'</p>
                <p><label>Tipo D.I : </label>'.$row['Tipo_Documento'].'</p>
                <p><label>Numero de D.I : </label>'.$row['Numero_Documento'].'</p>
                <p><label>Discapacidad : </label>'.$row['Discapacidad'].'</p>
                
		';
	}
	echo $output;
}
?>