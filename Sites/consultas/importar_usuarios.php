<?php include('../templates/header.php'); ?>

    <?php
        require("../config/connection.php");
        $query = "SELECT * FROM importar_usuario();";
        $result = $db2 -> prepare($query);
        $result -> execute();
        $data = $result -> fetchAll();
    ?>

<?php include('../templates/footer.php') ?>
