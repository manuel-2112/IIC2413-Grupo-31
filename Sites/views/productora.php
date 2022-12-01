<h1>Bienvenido/a: <?php echo $_SESSION['username'] ?> Productora</h1>


<form action="views/logout.php" method="get">
    <input type="submit" value="Cerrar sesion" class="close-button">
</form>

<?php
  include('../consultas/eventos_productora.php')
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