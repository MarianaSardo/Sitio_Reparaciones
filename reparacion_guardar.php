<?php
include('conexion.php');

$est = 5;
$est1 = 6;
$valores="";


$sql = "UPDATE reparar SET ";


if ($_POST["reparado"] == "Reparado") {

  
    $valores .= "estado ='" . $est . "' WHERE numOrden = " . $_GET["numOrden"] . ";";

    mysqli_query($conexion, $sql.$valores);

    header('Location: historico.php?nombre=5');
} else {
   

    $valores .= "estado ='" . $est1 . "' WHERE numOrden = " . $_GET["numOrden"] . ";";

    mysqli_query($conexion, $sql.$valores);
    header('Location: historico.php?nombre=6');
}

?>
