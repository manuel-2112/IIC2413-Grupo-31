<?php
// Dado un artista, entregue los datos de su ultimo tour (el m´as reciente)
if($boton_3) {
    foreach (range(0, 3) as $number) {
        echo '<tr>
        <th scope="row">'.$number.'</th>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
      </tr>';
    }
}
?>