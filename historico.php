<?php
include('header.php');

?>
<h1>Historico</h1>

<div class="conthist" >
    <button><a href="index.php">Agregar equipo</a></button>
    <br><br>

    <form name="formulario" action="historico.php" method="get">

        <label for="estado">Filtrar por estado</label>

        <select name="nombre" id="nombre" onchange="document.formulario.submit();">

            <?php

            include("conexion.php");

            $estados = "SELECT * from estados ORDER by id ASC";
            $resultado = mysqli_query($conexion, $estados);

            while ($valores = mysqli_fetch_array($resultado)) {
                if ($valores["id"] == $_GET["nombre"]) {
                    echo "<option value=\"" . $valores["id"] . "\" selected>" . $valores["nombre"] . "</option>";

                } else {
                    echo "<option value=\"" . $valores["id"] . "\">" . $valores["nombre"] . "</option>";

                }
            }

            ?>


        </select><br><br>

        <div class="ovr">
        <table>
            <tr>
                <th>&nbsp</th>
                <th>Fecha</th>
                <th>Numero de orden</th>
                <th>Nombre cliente</th>
                <th>Contacto</th>
                <th>Producto</th>
                <th>Marca/Numero de serie/Modelo</th>
                <th>Problema segun cliente</th>
                <th>Diagnostico</th>
                <th>Repuesto/Costo de Repuesto</th>
                <th>Costo total</th>
                <th>Fecha de entrega</th>
            </tr>

            <?php



            $articulos = "SELECT * from reparar WHERE estado= " . $_GET["nombre"] . " ORDER by numOrden asc";
            $resultado = mysqli_query($conexion, $articulos);



            while ($registro = mysqli_fetch_array($resultado)) {

                $aux1 = "location.href='presupuestar.php?numOrden=" . $registro["numOrden"] . "'";
                $aux2 = "location.href='entrega.php?numOrden=" . $registro["numOrden"] . "'";
                $aux3 = "location.href='reparacion.php?numOrden=" . $registro["numOrden"] . "'";


                if ($registro["estado"] == 1) {
                    echo "<tr><td>" . "<input type=\"button\" value=\"Presupuestar\"  onclick=\"$aux1\">" . "</td>";
                } else if ($registro["estado"] == 2) {
                    echo "<tr><td>" . "<input type=\"button\" value=\"Reparacion\"  onclick=\"$aux3\">" . "</td>";
                } else if ($registro["estado"] == 4 || $registro["estado"] == 5 || $registro["estado"] == 6) {
                    echo "<tr><td>" . "<input type=\"button\" value=\"Entregar\"  onclick=\"$aux2\">" . "</td>";
                } else if ($registro["estado"] == 7) {
                    echo "<tr><td>&nbsp&nbsp&nbsp&nbsp</td>";
                } else {
                    echo "<tr><td>&nbsp&nbsp&nbsp&nbsp</td>";
                }

                echo "<td>" . $registro["fecha"] . "</td>";
                echo "<td>" . $registro["numOrden"] . "</td>";
                echo "<td>" . $registro["nombre"] . "</td>";
                echo "<td> <b>Tel:</b>" . $registro["telefono"] . "<br> <b>Mail:</b> " . $registro["mail"] . "</td>";
                echo "<td>" . $registro["producto"] . "</td>";
                echo "<td> <b>Marca:</b> " . $registro["marca"] . "<br> <b>No. Serie:</b> " . $registro["numSerie"] . "<br> <b>Mod:</b>" . $registro["modelo"] . "</td>";
                echo "<td>" . $registro["problema"] . "</td>";
                echo "<td>" . $registro["diagnostico"] . "</td>";
                echo "<td>" . $registro["repuesto"] . "<br> $" . $registro["costoRepuesto"] . "</td>";
                echo "<td> $" . $registro["costoTotal"] . "</td>";
                echo "<td>" . $registro["fechaEntrega"] . "</td></tr>";


            }


            $resultado->free();

            ?>

        </table>
        </div>
        <?php
        include('footer.php');

        ?>