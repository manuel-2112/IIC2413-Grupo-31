<?php
//Dado un artista, entregue el n´umero de entradas de cortes´ıa que ha entregado
if($boton_2) {
    foreach (range(0, 2) as $number) {
        echo '<tr>
        <th scope="row">'.$number.'</th>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
      </tr>';
    }
}
?>