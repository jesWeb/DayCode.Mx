<?php 

include("con_db.php");

if (isset($_POST['subir'])) {

	if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido_a']) >= 1 && strlen($_POST['Apellido_b']) >= 1 && strlen($_POST['Telefono']) >= 1 && strlen($_POST['Email']) >= 1 && strlen($_POST['Lista']) >= 1 && strlen($_POST['Empresa']) >= 1 && strlen($_POST['Area']) >= 1) {

		$nombre = trim($_POST['Nombre']);
		$ape_a = trim($_POST['Apellido_a']);
		$ape_b = trim($_POST['Apellido_b']);
		$telefo = trim($_POST['Telefono']);
		$email = trim($_POST['Email']);
		$empresa = trim($_POST['Empresa']);
		$servicio = trim($_POST['Lista']);
		$descri = trim($_POST['Area']);

		// Puerta de acceso
		$acceso = true;
		// Verificador de validaciones
		$contador=0;

/////////////////////////////////////////////////////////////////////////////////////////////
		// EMAIL
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			// Realmacenamos lo rescatado en el input de email
			$email = $_POST['Email'];
			// Generamos el ARRAY con todos los caracteres del email
			$poin = str_split($email);
			// Creamos una variable contador
			$cont=0;
			// For que recorre todo el array "poin"
			foreach($poin as &$elem){
				// Condicionale de caracteres que NO deben aparecer
				if($elem == '#' || $elem == '&' || $elem == '%' || $elem == '$' || $elem == '-' ||  $elem == '+'){
					   $cont = $cont+1;
				}
			}
			
			// Mensaje si el contador de caracteres prohibidos aumenta
			if($cont>0){
				//ERROR POSIBLE #4
				$acceso=false;

			//    echo "<p class='error'>Errores: '$cont'</p>";
			//    echo $email;
			}else{
				//Obtenemos el dominio
				$domi = substr(strrchr ($email, '.'),1);

				//Verificamos que la terminación del dominio sea correcta (tamaño)
				if (strlen($domi)>1 && strlen($domi)<6 && (!strstr($domi,"@")) ){
					//Almacenamos previo al dominio
					$domi_prev = substr($email,0,strlen($email) - strlen($domi) - 1);
					//Verica que lo ultimo no sea (@ o .)
					$ultimo = substr($domi_prev,strlen($domi_prev)-1,1);
					if ($ultimo != "@" && $ultimo != "."){
						// Damos acceso
						if($acceso==true){
							$contador++;  
						}
						
					}else{
						//ERROR POSIBLE #3
						$acceso=false;

						//echo "<p class='error'>Verifique la sintaxis de su correo</p>";    
					}
				}else{
					//ERROR POSIBLE #2
					$acceso=false;
					
					//
				}
			}
			   
		}else{
			//ERROR POSIBLE #1
			$acceso=false;

			echo "<p class='error'>EMAIL ERRONEO</p>";
		}
/////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////

		// Nombre
		if (!preg_match('/^[A-ZÁÉÍÓÚ][a-záéíóú]*$/', $nombre)){
			echo "<p class='error'>El nombre debe empezar por mayúscula</p>";
			$acceso=false;
		}else{
			$contador++;
		}

		// Apellido #1
		if (!preg_match('/^[A-ZÁÉÍÓÚ][a-záéíóú]*$/', $ape_a)){
			echo "<p class='error'>El nombre debe empezar por mayúscula</p>";
			$acceso=false;
		}else{
			$contador++;
		}

		// Apellido #2
		if (!preg_match('/^[A-ZÁÉÍÓÚ][a-záéíóú]*$/', $ape_b)){
			echo "<p class='error'>El nombre debe empezar por mayúscula</p>";
			$acceso=false;
		}else{
			$contador++;
		}

		// Telefono
		if (is_numeric($telefo)) {
			$contador++;
		} else {
			$acceso=false;
		}

		// Nombre de la empresa
		if (!preg_match('/[A-ZÁÉÍÓÚ][a-záéíóú]*$/', $empresa)){
			echo "<p class='error'>Debe iniciar con mayúscula</p>";
			$acceso=false;
		}else{
			$contador++;
		}

		// Select
		if ($servicio=="Elige una opcion") {
			echo "<p class='error'>Elija una opción</p>";
			$acceso=false;
		}
		else{
			// echo "<p class='error'>BIEN</p>";
			$contador++;
		}

        // ============================================================================
        // Deben existir 7 validaciones
        if($acceso==true){
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
        }else{
            echo "<p>Registro NO realizado</p>";
        }
        echo $contador;
        // ============================================================================

    }else {
	    ?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
    }
}
?>