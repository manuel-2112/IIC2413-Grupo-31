<?php
//Entregue un listado del nombre y tel´efono de contacto de todos los artistas
if($boton_1) {
    foreach (range(0, 1) as $number) {
        echo '<tr>
        <th scope="row">'.$number.'</th>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
      </tr>';
    }
}
?>