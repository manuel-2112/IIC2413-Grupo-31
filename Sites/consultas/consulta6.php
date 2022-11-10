<?php
//Dado un artista, liste todos los hoteles en los que se ha hospedado y cuantas veces se
//ha hospedado en cada uno (con c´odigos de reserva distinto, no cantidad de noches)
if($boton_6) {
    foreach (range(0, 6) as $number) {
        echo '<tr>
        <th scope="row">'.$number.'</th>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
        <td><?php echo $artista ?></td>
      </tr>';
    }
}
?>