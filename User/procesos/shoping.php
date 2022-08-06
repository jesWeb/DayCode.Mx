<?php 

include_once '../../config/conexionDB.php';
include_once '../../config/parameters.php';
session_start();
if (isset($_POST['id']) && is_numeric($_POST['id'])) {    

    $_POST['id'] = intval($_POST['id']);
    $token = $_POST['token'];

    $token_tmp = hash_hmac('sha1', $_POST['id'], KEY_TOKEN);
    // ECHO $token.'<br>';
    // echo 'token_tmp'.$token_tmp;
   
    if ($token == $token_tmp) {    
        $sql = 'select id from cursos where id = :id';
        $stmt = $PDO->prepare($sql);
        $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
        $stmt->execute();
        $curso = $stmt->fetch(PDO::FETCH_ASSOC);
        if (null != $curso) {
            $_SESSION['carrito'] = isset($_SESSION['carrito']) && is_array($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
            $_SESSION['carrito'][$_POST['id']] = isset($_SESSION['carrito'][$_POST['id']]) ? ++$_SESSION['carrito'][$_POST['id']] : 1;
            // $_SESSION['carrito'] = [1 => 1, 4 = 3, 10 => 1];
            $datos['ok'] = true;
            $datos['cantidad'] = count($_SESSION['carrito']);
            $datos['carrito'] = $_SESSION['carrito'];
        } else {
            $datos['ok'] = false;
        }
        

        // if (isset( $_SESSION['carrito']['productos'] [$id])) {
            
        //     $_SESSION['carrito']['productos'] [$id] += 1;
         
        // }else {
        //     $_SESSION['carrito']['productos'] [$id] = 1;
        //  }
        
        //  $datos['10'] = count($_SESSION['carrito']['productos']); 
        //  $datos['ok'] = true;

    }else {
        $datos['ok'] = false;
    }

} else {
    $datos['ok'] = false;
}

echo json_encode($datos);

