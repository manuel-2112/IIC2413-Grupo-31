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
        
        $query_usuarios = "SELECT * FROM usuarios;";
        $result_usuarios = $db2 -> prepare($query_usuarios);
        $result_usuarios -> execute();
        $data_usuarios = $result_usuarios -> fetchAll();

        foreach ($data_usuarios as $productora){
            $query_copia = "SELECT insertar_productora('$productora[1]'::varchar, '$productora[2]'::varchar, '$productora[3]'::varchar)";
            $result_copia = $db -> prepare($query_copia);
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
    ?>
    <div id="container">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Usuarios</h1><br>
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Usuarios
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Contraseña</th>
                                    <th>Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($data1 as $usuario) {
                                    echo("<tr>");
                                    echo("<td>$usuario[0]</td>");
                                    echo("<td>$usuario[1]</td>");
                                    echo("<td>$usuario[2]</td>");
                                    echo("<td>$usuario[3]</td>");
                                    echo("</tr>");
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

<?php include('../templates/footer.php') ?>
