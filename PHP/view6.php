<?php 
$inc = include("./PHP/con_testi.php"); // Enlace a conexcion

if ($inc) {
    // $val=1;
    $busqueda = "SELECT * FROM testimoniales WHERE ID>=1";
	
	// Contar rows
	$sqll = "SELECT * from testimoniales";
	if ($ress = mysqli_query($conextion, $sqll)) {
  
		$rowcount = mysqli_num_rows( $ress );
        $rowcount=$rowcount-5;
	}

	$resultado = mysqli_query($conextion,$busqueda);

	if ($resultado) {
		while ($fila = $resultado->fetch_array()) {

		if($fila['ID']==$rowcount){

        $id = $fila['ID'];

			$nom = $fila['Nombre'];
            $curse = $fila['Curso'];
			$mensajee = $fila['Mensaje'];
		
			}
	    }
	}
}
?>