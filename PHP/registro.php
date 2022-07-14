<?php 

include("con_db.php");

if (isset($_POST['subir'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido_a']) >= 1 && strlen($_POST['Apellido_b']) >= 1 && strlen($_POST['Telefono']) >= 1 && strlen($_POST['Email']) >= 1 && strlen($_POST['Empresa']) >= 1 && strlen($_POST['Lista']) >= 1 && strlen($_POST['Empresa']) >= 1 ) {

	    $nombre = trim($_POST['Nombre']);
	    $ape_a = trim($_POST['Apellido_a']);
		$ape_b = trim($_POST['Apellido_b']);
		$telefo = trim($_POST['Telefono']);
		$email = trim($_POST['Email']);
		$empresa = trim($_POST['Empresa']);
		$servicio = trim($_POST['Lista']);
		$descri = trim($_POST['Area']);



	    $consulta = "INSERT INTO usuarios(Nombre, Primer_A, Segundo_A, Telefono, Correo, Nom_empresa, Servicio, Mensaje) VALUES ('$nombre','$ape_a','$ape_b','$telefo','$email','$empresa','$servicio','$descri')";


	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>