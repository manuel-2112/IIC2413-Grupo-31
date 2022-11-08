<?php
    require("../config/conexion.php");
    $artista = $_POST["artista"] ?? null;
    $tour = $_POST["tour"] ?? null;
    $query = "";
    $result = $db -> prepare($query);
    $result -> execute();
    $dataCollected = $result -> fetchAll();
?>
<table class="table table-striped">
    <?php
    foreach ($dataCollected as $value) {
        echo "<tr> <td>$value[0]</td> </tr>";
    }
    ?>
</table>