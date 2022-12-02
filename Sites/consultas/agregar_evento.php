<?php session_start(); ?>

<?php


    $name = str_replace('_',' ',$_SESSION['username']);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("../config/connection.php");
    $query = "SELECT MAX(E.id_ev) as maximo FROM Evento as E";
    $result_id = $db2 -> prepare($query);
	$result_id -> execute();
    $result_id = $result_id -> fetchAll();
    $id_ev = $result_id[0][0] + 1;
    
    $nombre = $_POST["nombre"];
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_termino = $_POST["fecha_termino"];
    $estado = 'en espera';
 	$query = "INSERT INTO Eventos (id_ev, nombre,fecha_inicio, fecha_termino)
     VALUES ($id_ev, $nombre, $fecha_inicio, $fecha_termino)";
	$result_agregar_evento = $db2 -> prepare($query);
	$result_agregar_evento -> execute();

    $query = "SELECT P.id_p FROM Productoras as P WHERE LOWER(P.nombre) = '$name'";
    $result_p_id = $db2 -> prepare($query);
	$result_p_id -> execute();
    $result_p_id = $result_p_id -> fetchAll();
    $id_p = $result_p_id[0][0];

    $query = "INSERT INTO ProductoraEvento (id_p, id_ev) VALUES($id_p, $id_ev)";
    $result = $db2 -> prepare($query);
	$result -> execute();

    $artista = $_POST["artista"];
    $query = "SELECT A.id_a FROM Artistas as A WHERE A.nombre = '$artista'";
	$result_artista = $db2 -> prepare($query);
	$result_artista -> execute();
    $result_artista = $result_artista -> fetchAll();
    $valor_result_artista = $result_artista[0][0];

    $query = "INSERT INTO ArtistaEvento (id_a, id_ev) VALUES($valor_result_artista, $id_ev)";
    $result = $db2 -> prepare($query);
	$result -> execute();
    $final_result = $result -> fetchAll();

    echo($final_result[0])
?>