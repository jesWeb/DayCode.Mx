<?php 
   
define ("base_url", "http://localhost/DayCode.MX/");
define ("base_url_admin","http://localhost/DayCode.MX/admin");
define ("KEY_TOKEN", "APR.wqc-354*");
define ("MONEDA", "$" );
//  session_start();
$num_cart = 0;
if (isset ($_SESSION['carrito'][' productos '])) {
    $num_cart = count($_SESSION['carrito'][' productos ']);
}
$define ("base_url_admin","http://localhost/DayCode.MX/admin")


?>