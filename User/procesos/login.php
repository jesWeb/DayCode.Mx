<?php 
include_once '../../config/ConexionDB.php';
if (isset($_REQUEST['correo-electronico'])) {
    if (isset($_REQUEST['contraseña'])) {
        $email = $_REQUEST['correo-electronico'];
        $pass = $_REQUEST['contraseña'];
        $query0 = "SELECT * FROM cliente WHERE email = '$email'";
        $result0 = mysqli_query($conexion, $query0);
        $conteo0 = $result0->num_rows;

        if ($conteo0) {
            $querycliente = "SELECT * FROM cliente WHERE email= '$email'";
            $cliente = mysqli_query($conexion, $querycliente);
            $row = mysqli_fetch_assoc($cliente);
            if (password_verify($pass, $row['password'])) {
                echo json_encode('success');
                $querycliente = "SELECT * FROM cliente WHERE email='$email'";
                $cliente = mysqli_query($conexion, $querycliente);
                $row = mysqli_fetch_assoc($cliente);
                session_start();
                $_SESSION['login'] = 1;
                $_SESSION['idCliente'] = $row['idCliente'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellidos'] = $row['apellidos'];
                $_SESSION['idTUsuario'] = $row['idTUsuario'];
                $_SESSION['sexo'] = $row['Sexo'];
                $_SESSION['dateCreacion'] = $row['dateCreacion'];
            }else if($pass == $row['password']){
                echo json_encode('success');
                $querycliente = "SELECT * FROM cliente WHERE email='$email'";
                $cliente = mysqli_query($conexion, $querycliente);
                $row = mysqli_fetch_assoc($cliente);
                session_start();
                $_SESSION['login'] = 1;
                $_SESSION['idCliente'] = $row['idCliente'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellidos'] = $row['apellidos'];
              
                $_SESSION['idTUsuario'] = $row['idTUsuario'];
               
                $_SESSION['status'] = $row['Status'];
                $_SESSION['sexo'] = $row['Sexo'];
                $_SESSION['dateCreacion'] = $row['dateCreacion'];
            } else {
                echo json_encode('error');
            }
        } else {
            echo json_encode('error');
        }
    }
}
