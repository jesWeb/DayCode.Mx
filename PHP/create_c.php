<?php 

include("con_db.php");

if (isset($_POST['subir'])) {

	if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido_a']) >= 1 && strlen($_POST['Apellido_b']) >= 1 &&  strlen($_POST['Email']) >= 1 &&  strlen($_POST['Fecha']) >= 1 &&  strlen($_POST['Contraseña']) >= 1) {

		$nombre = trim($_POST['Nombre']);
		$ape_a = trim($_POST['Apellido_a']);
		$ape_b = trim($_POST['Apellido_b']);
        $fecha = trim($_POST['Fecha']);
		$email = trim($_POST['Email']);
        $pass = md5($_POST['Contraseña']);
		$copru_pass = trim($_POST['Contraseña']);

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
		if (!preg_match('/[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$/', $nombre)){
			echo "<p class='error'>El nombre debe empezar por mayúscula</p>";
			$acceso=false;
		}else{
			$contador++;
		}

		// Apellido #1
		if (!preg_match('/[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$/', $ape_a)){
			echo "<p class='error'>El nombre debe empezar por mayúscula</p>";
			$acceso=false;
		}else{
			$contador++;
		}

		// Apellido #2
		if (!preg_match('/[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$/', $ape_b)){
			echo "<p class='error'>El nombre debe empezar por mayúscula</p>";
			$acceso=false;
		}else{
			$contador++;
		}

		//Fecha
		$hoy = date("Y-m-d");
		// Si la fecha es de apartir de hoy => true 
		if ($hoy <= $fecha) {
			$acceso=false;
		    echo "TU FECHA DE NACIMIENTO";
		}
		else {
			$contador++;
		}

        // ============================================================================
        // Deben existir 6 validaciones
        if($acceso==true && $contador==5){
			$consulta = "INSERT INTO usuarios(Nombre, Primer_A, Segundo_A, Correo, Contraseña, Fecha_nac) VALUES ('$nombre','$ape_a','$ape_b','$email','$pass','$fecha')";


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