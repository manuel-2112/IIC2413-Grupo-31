<?php include('../templates/header.php'); ?>    
    <?php
        require("../config/connection.php");
        $query_tabla = "SELECT crear_tabla_usuarios();";
        $result_tabla = $db -> prepare($query_tabla);
        $result_tabla -> execute();
        $data_tabla = $result_tabla -> fetchAll();

        $query_productoras = "SELECT importar_productoras();";
        $result_productoras = $db2 -> prepare($query_productoras);
        $result_productoras -> execute();
        $data_productoras = $result_productoras -> fetchAll();

        foreach ($data_productoras as $productora){
            $query_copia = "SELECT insertar_productora('$productora[0]'::varchar, '$productora[1]'::varchar, '$productora[2]'::varchar)";
            $result_copia = $db -> prepare($copia);
            $result_copia -> execute();
            $data_copia = $result_copia -> fetchAll();    
        }

        $query_artistas = "SELECT importar_artistas();";
        $result_artistas = $db -> prepare($query_artistas);
        $result_artistas -> execute();
        $data_artistas = $result_artistas -> fetchAll();
        
        $query1 = "SELECT * FROM usuarios;";
        $result1 = $db -> prepare($query1);
        $result1 -> execute();
        $data1 = $result1 -> fetchAll();
        echo(print_r($data1));
    ?>

<?php include('../templates/footer.php') ?>
