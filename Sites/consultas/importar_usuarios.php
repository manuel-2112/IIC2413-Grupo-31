<?php include('../templates/header.php'); ?>    
    <?php
        require("../config/connection.php");
        $query = "SELECT importar_usuario();";
        $result = $db2 -> prepare($query);
        $result -> execute();
        $data = $result -> fetchAll();
        echo(print_r($data));
        
        $query1 = "SELECT * FROM usuarios;";
        $result1 = $db2 -> prepare($query1);
        $result1 -> execute();
        $data1 = $result1 -> fetchAll();
        echo(print_r($data1))
    ?>

<?php include('../templates/footer.php') ?>
