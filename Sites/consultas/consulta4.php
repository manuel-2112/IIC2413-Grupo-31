<?php
//Dado un tour, liste los pa´ıses que ser´an visitados en dicho tour
if($boton_4) {
    foreach (range(0, 4) as $number) {
        echo '<tr>
        <th scope="row">'.$number.'</th>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
      </tr>';
    }
}
?>