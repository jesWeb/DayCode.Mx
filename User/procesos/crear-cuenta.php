<?php 

require_once '../../config/conexionDB.php';

if (isset($_POST)) {
    if($_POST['Nombre'] == ''){
        echo json_encode('error');
    }else{
        $nombre=$_POST["Nombre"];
        $apellido_a=$_POST["ape_a"];
        $apellido_b=$_POST["ape_b"];
        $mail=$_POST["Email"];
        $fecha=$_POST["Fecha"];
        $Passw=$_POST["Contraseña"];
        $studet=$_POST["Lista"];
        $Sex=$_POST["sexos"];
        $date_creacion= $hoy = date("Y-m-d H:i:s");  
        $querycliente = "INSERT INTO `cliente`(`idCliente`, `nombre`, `apellido_a`, `apellido_b`, `fechaNac`, `idTUsuario`, `email`, `telefono`, `idServicio`, `Estatus`, `Sexo`, `Contra`, `dateCreacion`, `dateModificacion`, `dateEliminacion`, `statusEliminacion`) VALUES 
        (NULL,'$nombre','$apellido_a','$apellido_b','$fecha','$studet','$mail',NULL,1,1,'$Sex','$Passw','$date_creacion',NULL,NULL,0)";
        $cliente = mysqli_query($conexion, $querycliente); 
     }
     if ($cliente) {
        echo json_encode('success');
    } else {
        echo json_encode('error');
    }
}
//var_dump($cliente);

?>