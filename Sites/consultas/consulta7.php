<?php
//Muestre al artista que ha entregado la mayor cantidad de entradas de cortes´ıa
if($boton_7) {
    foreach (range(0, 7) as $number) {
        echo '<tr>
        <th scope="row">'.$number.'</th>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
      </tr>';
    }
}
?>