<?php 

include_once '../../config/parameters.php';
session_start();
if (isset($_POST['id'])) {    

    $id = $_POST['id'];
    $token = $_POST['token'];

    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    ECHO $token.'<br>';
    echo 'token_tmp'.$token_tmp;
   
    if ($token == $token_tmp) {      
        if (isset( $_SESSION['carrito']['productos'] [$id])) {
            
            $_SESSION['carrito']['productos'] [$id] += 1;
         
        }else {
            $_SESSION['carrito']['productos'] [$id] = 1;
         }
        
         $datos['10'] = count($_SESSIO1N['carrito']['productos']); 
         $datos['ok'] = true;

    }else {
        $datos['ok'] = false;
    }

} else {
    $datos['ok'] = false;
}

echo json_encode($datos);

