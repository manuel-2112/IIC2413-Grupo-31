<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bienvenido/a:</a>
    <span class="text-muted">Productora</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><?php echo $_SESSION['username'] ?></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Consultas
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Consulta 1</a></li>
              <li><a class="dropdown-item" href="#">Consulta 2</a></li>              
            </ul>
          </li>
        </ul>
        <form action="views/logout.php" method="get">
          <input type="submit" value="Cerrar sesion" class="btn btn-succes">
        </form>
        </form>
      </div>
    </div>
  </div>
</nav>

<h2>Filtrar por fecha:</h2>
<form align="center" action="consultas/filtro_eventos_fecha.php" method="post">
  Fecha inicio:
  <input type="date" name="fecha_inicio">
  <br/><br/>
  Fecha termino
  <input type="date" name="fecha_termino">
  <input type="submit" value="Filtrar">
</form>

<?php


    $name = str_replace('_',' ',$_SESSION['username']);
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db
    require("config/connection.php");

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