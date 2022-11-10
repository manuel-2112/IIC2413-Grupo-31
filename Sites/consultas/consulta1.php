<?php
//Entregue un listado del nombre y tel´efono de contacto de todos los artistas
if($boton_1) {
    $user = 'grupo31';
    $password = 'basesdedatos31';
    $databaseName = 'grupo31e2';
    try {
        //require('data.php'); 
        $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");
      } catch (Exception $e) {
        echo "No se pudo conectar a la base de datos: $e";
    }
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