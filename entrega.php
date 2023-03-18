<?php
              include('conexion.php');
              
            
              $sql = "UPDATE reparar SET estado=7 WHERE numOrden = ".$_GET["numOrden"]."";

              mysqli_query($conexion, $sql);

              
              
              header('Location: historico.php?nombre=7'); 

?>

