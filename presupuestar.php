<?php

include('conexion.php');
include('header.php');
?>

<h1>Diagnostico y presupuesto</h1>


<div class="contindex">


    <?php
    $aux = $_GET["numOrden"];

    
    $sql = "SELECT * FROM reparar WHERE numOrden='".$aux."'";
    $resultado = mysqli_query($conexion, $sql);


    while ($registro = mysqli_fetch_array($resultado)) {

 echo '<form action="modificar_guardar.php?numOrden='.$aux.'"" method="post">
            <label for="diagnostico">Diagnostico: </label>
            <input type="text" name="diagnostico" id="diagnostico" placeholder="Diagnostico detalle" pattern="[a-zA-Z\s]+"><br>


            <h3>Repuesto:</h3>
            <div class="contrep">
                <label for="repuesto">Nombre del repuesto:</label>
                <input type="text" name="repuesto" id="repuesto" placeholder="Repuesto" pattern="[a-zA-Z\s]+"><br>
                <label for="costoRepuesto">Costo del Repuesto: </label>
                $ <input type="number" name="costoRepuesto" id="costoRepuesto" placeholder="123.4" min="0" >
            </div>
            <br>
            <label for="costoTotal">Costo total de la reparacion:</label>
            <input type="number" name="costoTotal" id="costoTotal" title="Costo de la mano de obra + costo de repuesto"  placeholder="123.4" min="0"><br><br>
            <label for="fechaEntrega"> Fecha de entrega: 
                <input type="date" id="fechaEntrega" name="fechaEntrega" value="'.$registro["fechaEntrega"].'" required>
                </label> <br><br>
            <select name="acepta" id="acepta">
                <option value="1">Acepta el presupuesto</option>
                <option value="2">Rechaza el presupuesto </option>
            </select><br><br>

            <input type="submit" value="Enviar">
        </form>';

    }
      
    ?>


</div>

<?php
    include 'footer.php';
    ?>
