<?php
//Dado un artista, entregue el n´umero de entradas de cortes´ıa que ha entregado
if($boton_2) {
    $user = 'grupo31';
    $password = 'basesdedatos31';
    $databaseName = 'grupo31e2';
    try {
        $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");
        } catch (Exception $e) {
        echo "No se pudo conectar a la base de datos: $e";
    }
    $query = "";
    $result = $db -> prepare($query);
    $result -> execute();
    $dataCollected = $result -> fetchAll();
    echo '
        <thead>
        <tr>
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