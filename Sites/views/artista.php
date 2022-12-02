<h1>Bienvenido/a: <?php echo $_SESSION['username'] ?> Artista</h1>

<form action="views/logout.php" method="get">
    <input type="submit" value="Cerrar sesion" class="close-button">
</form>
<?php
    $name = str_replace('_',' ',$_SESSION['username']);
    $query = "SELECT E.nombre as nombre FROM Evento as E, Productoras as P, ProductoraEvento as PE WHERE P.id_p = PE.id_p AND E.id_ev = PE.id_ev AND LOWER(P.nombre) = '$name' AND E.fecha_inicio >= '$fecha_inicio' AND E.fecha_termino <= '$fecha_termino';";
    $result_fechas = $db2 -> prepare($query);
    $result_fechas -> execute();
    $eventos = $result_fechas -> fetchAll();

    $query = "SELECT E.nombre as nombre FROM Evento as E, Productoras as P, ProductoraEvento as PE WHERE P.id_p = PE.id_p AND E.id_ev = PE.id_ev AND LOWER(P.nombre) = '$name' AND E.fecha_inicio >= '$fecha_inicio' AND E.fecha_termino <= '$fecha_termino';";
    $result_fechas = $db2 -> prepare($query);
    $result_fechas -> execute();
    $eventos = $result_fechas -> fetchAll();

    $query = "SELECT E.nombre as nombre FROM Evento as E, Productoras as P, ProductoraEvento as PE WHERE P.id_p = PE.id_p AND E.id_ev = PE.id_ev AND LOWER(P.nombre) = '$name' AND E.fecha_inicio >= '$fecha_inicio' AND E.fecha_termino <= '$fecha_termino';";
    $result_fechas = $db2 -> prepare($query);
    $result_fechas -> execute();
    $eventos = $result_fechas -> fetchAll();
?>