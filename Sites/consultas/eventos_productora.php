<?php
  $name = str_replace('_',' ',$_SESSION['username']);
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/connection.php");

 	$query = "SELECT E.nombre as nombre, E.fecha_inicio as fecha_inicio, E.fecha_termino
     FROM Evento as E, Productoras as P, ProductoraEvento as PE
     WHERE P.id_p = PE.id_p AND E.id_ev = PE.id_ev AND LOWER(P.nombre) = '$name'";
	$result = $db2 -> prepare($query);
	$result -> execute();
	$productoras = $result -> fetchAll();
  ?>
<table align="center">
<tr>
<th>Nombre</th>
</tr>
    <?php
    foreach ($productoras as $productora) {
        echo "<tr> <td>$productora[0]</td> </tr>";
    }
    ?>
</table>