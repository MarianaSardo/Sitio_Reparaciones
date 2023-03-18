<?php
include 'header.php';
?>

<h1>Ingreso de equipos</h1>


<div class="contindex">

    <button><a href="historico.php?nombre=1">Historico</a></button>
    <br><br>
    <form action="guardar_datos.php" method="post">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required><br>
        <label for="nombre">Nombre cliente:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" required>
        <label for="mail">Email:</label>
        <input type="email" name="mail" id="mail" required>
        <h3>Datos del producto</h3>
        <label for="producto">Producto</label>
        <input type="text" name="producto" id="producto" required>
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" required><br>
        <label for="numSerie">Numero de serie:</label>
        <input type="text" name="numSerie" id="numSerie" required>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" required><br>
        <label for="problema">Motivo de ingreso:</label>
        <input type="text" name="problema" id="problema" required><br><br>

        <input type="submit" value="Enviar">
    </form>


</div>

<?php
include 'footer.php';

?>