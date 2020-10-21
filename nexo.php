<?php
include ("con_db.php");

if (isset($_POST['register'])){
	if (strlen($_POST['demo-name'])>=1 && strlen($_POST['demo-email'])>=1){
		$nombres = trim($_POST['demo-name']);
		$email = trim($_POST['demo-email']);
		$categoria = trim($_POST['demo-category']);
		$suscribirme = trim($_POST['demo-copy']);
		$mas_info = trim($_POST['demo-human']);
		$mensaje = trim($_POST['demo-message']);
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO clientes (nombres, email, categoria, suscribirme, mas_info, mensaje,fecha_cont) VALUES ('$nombres','$email','$categoria','$suscribirme','$mas_info','$mensaje','$fechareg')";
		$resultado = mysqli_query($conex,$consulta);
	}
}
?> 