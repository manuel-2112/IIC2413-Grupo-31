<?php include('../templates/header.php'); ?>    
    <?php
        require("../config/connection.php");
        $query = "SELECT importar_usuario();";
        $result = $db2 -> prepare($query);
        $result -> execute();
        $data = $result -> fetchAll();

        $query_artistas = "SELECT importar_artistas();";
        $result_artistas = $db1 -> prepare($query_artistas);
        $result_artistas -> execute();
        $data_artistas = $result_artistas -> fetchAll();
        
        $query1 = "SELECT * FROM usuarios;";
        $result1 = $db2 -> prepare($query1);
        $result1 -> execute();
        $data1 = $result1 -> fetchAll();
        echo(print_r($data1));
        echo(print_r($data_artistas))
    ?>

<?php include('../templates/footer.php') ?>
