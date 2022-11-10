<?php
    $boton_1 = isset($_POST['button_1']);
    $boton_2 = isset($_POST['button_2']);
    $boton_3 = isset($_POST['button_3']);
    $boton_4 = isset($_POST['button_4']);
    $boton_5 = isset($_POST['button_5']);
    $boton_6 = isset($_POST['button_6']);
    $boton_7 = isset($_POST['button_7']);
    $artista = $_POST["artista"] ?? null;
    $tour = $_POST["tour"] ?? null;
?>
<table class="table table-striped">    
  <?php
    include "consulta1.php";
    include "consulta2.php";
    include "consulta3.php";
    include "consulta4.php";
    include "consulta5.php";
    include "consulta6.php";
    include "consulta7.php";
    ?>
</table>