<?php
include('conexion.php');


$est = 2;
$est1 = 4;



$sql = "UPDATE reparar SET ";

$valores = "diagnostico='" . $_POST["diagnostico"] . "', ";
$valores .= "repuesto='" . $_POST["repuesto"] . "', ";
$valores .= "costoRepuesto='" . $_POST["costoRepuesto"] . "', ";
$valores .= "costoTotal='" . $_POST["costoTotal"] . "', ";
$valores .= "fechaEntrega ='" . $_POST["fechaEntrega"] . "', ";

if ($_POST["acepta"] == 1) {
    $valores .= "estado ='" . $est . "' WHERE numOrden = " . $_GET["numOrden"] . ";";

    mysqli_query($conexion, $sql.$valores);
    header('Location: historico.php?nombre=2');

} else {
  
    $valores .= "estado ='" . $est1 . "' WHERE numOrden = " . $_GET["numOrden"] . ";";

    mysqli_query($conexion, $sql.$valores);
    
    header('Location: historico.php?nombre=4');
}




?>