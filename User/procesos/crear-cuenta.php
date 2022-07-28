<?php 

include_once '../../config/ConexionDB.php';

if (!empty($_POST )) {
    if (empty($_POST["Nombre"]) or empty($_POST["apellidos"]) or empty($_POST["Fecha"]) or empty($_POST["Email"])   or empty($_POST["Contraseña"]) or empty($_POST["conected"])    ) {
        echo '<div class="alert alert-danger " role="alert">Rellena los campos Por favor </div>';
    }else{
        $nombre=$_POST["Nombre"];
        $apellido=$_POST["apellidos"];
        $mail=$_POST["Email"];
        $fecha=$_POST["Fecha"];
        $Passw=$_POST["Contraseña"];
        $studet=$_POST["Lista"];
        $Sex=$_POST["flexRadioX"];
        $date_creacion= $hoy = date("Y-m-d H:i:s");  
        $querycliente = "INSERT INTO `cliente`(`idCliente`, `nombre`, `apellidos`, `fechaNac`, `idTUsuario`, `email`, `telefono`, `idServicio`, `Status`, `Sexo`, `password`, `dateCreacion`, `dateModificacion`, `dateEliminacion`, `statusEliminacion`) 
        VALUES (null,'$nombre','$apellido','$fecha','[value-5]','$mail','[value-7]','$studet','[value-9]','$Sex','$Passw','$date_creacion','[value-13]','[value-14]','[value-15]')";
        $cliente = mysqli_query($conexion, $querycliente); 
     }if ($sql==1) {
        echo json_encode('success');
    } else {
        echo json_encode('error');
    }
}



?>