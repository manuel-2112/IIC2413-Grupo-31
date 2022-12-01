<?php session_start(); ?>

<?php


    $name = str_replace('_',' ',$_SESSION['username']);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/connection.php");
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_termino = $_POST["fecha_termino"];
    echo $fecha_inicio;

 	$query = "SELECT E.nombre as nombre FROM Evento as E, Productoras as P, ProductoraEvento as PE WHERE P.id_p = PE.id_p AND E.id_ev = PE.id_ev AND P.nombre = 'LetsGo Company' AND E.fecha_inicio >= $fecha_inicio AND E.fecha_termino <= $fecha_termino;";
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