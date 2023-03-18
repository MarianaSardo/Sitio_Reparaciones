<?php

include('conexion.php');
include('header.php');
?>
<h1>Reparacion</h1>

<div class="contindex">
    <button><a href="index.php">Agregar equipo</a></button>
    <button><a href="historico.php?nombre=1">Historico</a></button>

    <?php
    $aux = $_GET["numOrden"];

    $consulta = "SELECT * FROM reparar WHERE numOrden='" . $aux . "'";
    
    mysqli_query($conexion, $consulta);



    echo '<form method="POST" action="reparacion_guardar.php?numOrden=' . $aux . '">
       
    
        <h3>Estado de la reparacion</h3>
        <select name="reparado" id="reparado">
        <option value="Reparado">Reparado</option>
        <option value="No reparado">No se pudo reparar</option><br>
              
    </select><br><br>
    
    <input type="submit" value="Enviar"><input type="reset" value="Reset">
        </label><br></form>';



    echo '</div>';

    include('footer.php');
    ?>
