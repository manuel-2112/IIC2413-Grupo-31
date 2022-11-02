<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>E2 Grupo 31</title>
    </head>
    <body>
    <?php
    $n_entrega = 2; //Este es el nmo de entrega
    $n_grupo = 31; //Este es el nmo de entrega
    include "templates/header.php"
    ?>

    <div class="container">
    <h1>Entrega <?php echo "$n_entrega" ?></h1>
    <h2><small class="text-muted">Grupo <?php echo "$n_grupo" ?></small></h2>
    </div>
    <br><br>

    <div class="container">
    <h2> Consulta: </h2>
    </div>
    <div class="container">
    <form action="index.php" method="post" id="myForm">


        <div class="row mb-3">
            <label for="artistaInput" class="col-sm-2 col-form-label col-form-label-lg">Artista</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="artista" id="artistaInput" placeholder="Bad Bunny" require></input>
            </div>
        </div>
        

        <div class="row mb-3">
            <label for="tourInput" class="col-sm-2 col-form-label col-form-label-lg">Tour</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="tour" id="tourInput" placeholder="World's Hottest Tour" require></input>
            </div>
        </div>

        <br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-primary">Consultar</button>
            <button type="reset" class="btn btn-outline-primary">Limpiar busqueda</button>
        </div>

        
    </form>
    </div>

    <br><br><br>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
    </svg>

    <div class="container">
    <?php
        $artista = $_POST["artista"] ?? null;
        $tour = $_POST["tour"] ?? null;
        
        if ($artista && $tour){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">¡Consulta correcta!</h4>
                        <p>La consulta de los datos ingresados fue realizada con éxito. El resultado es el siguiente:</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <hr>
                        <p class="mb-0">Artista: '.$artista.'</p>
                        <p class="mb-0">Tour: '.$tour.'</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Mostrar detalles</button>
                        </div>
                </div>';
            } else {
                echo '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">No hay datos que mostrar...</h4>
                    <p>No hay ingresados en la busqueda.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <hr>
                    <div class="spinner-border text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>';
            }
    ?>    
    </div>

    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header container">
        <h3 class="offcanvas-title" id="offcanvasBottomLabel">Detalles:</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body small container">
    <?php
    echo '
        <h5><small class="text-muted">Artista: '.$artista.'<small></h5>
        <h5><small class="text-muted">Tour: '.$tour.'<small></h5>';
    ?>
    </div>
    </div>

    <?php
    include "templates/footer.php"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.5/dist/bootstrap-validate.js"></script>
    <script>
        //https://bootstrap-validate.js.org/v2/rules.html
        bootstrapValidate('#artistaInput', 'required:Este campo es requerido.|max:20:No es posible ingresar más de 20 caracteres.')
        bootstrapValidate('#tourInput', 'required:Este campo es requerido.|max:20:No es posible ingresar más de 20 caracteres.')
    </script>
    </body>
</html>