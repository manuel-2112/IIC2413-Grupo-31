<?php
//Dado un artista, liste todas las productoras con las que ha trabajado dicho artista
if($boton_5) {
    foreach (range(0, 5) as $number) {
        echo '<tr>
        <th scope="row">'.$number.'</th>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
      </tr>';
    }
}
?>