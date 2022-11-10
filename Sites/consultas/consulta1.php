<?php
//Entregue un listado del nombre y tel´efono de contacto de todos los artistas
if($boton_1) {
    require("../config/conexion.php");
    $query = "SELECT nombre_escenico, contacto FROM artistas;";
    $result = $db -> prepare($query);
    $result -> execute();
    $dataCollected = $result -> fetchAll();
    echo '
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre escenico</th>
            <th scope="col">Contacto</th>
        </tr>
        </thead>
        <tbody>';

        foreach ($dataCollected as $p) {
            echo "<tr>
                <td>$p[0]</td>
                <td>$p[1]</td>
                </tr>";
        };
        echo '</tbody>';
    }
?>