<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css" media="screen">
            #form_1,#form_2,#form_3,#form_4,#form_5,#form_6,#form_7 {display:none;}
        </style>
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
    <h1>Bienvenido/a:</h1>
    <h2><small class="text-muted">Grupo <?php echo "$n_grupo Entrega $n_entrega"?></small></h2>
    </div>
    <br><br>
    <form>
    <div class="container">
    <h2> Consulta: </h2>
    <select class="form-select" id="selectConsult" aria-label="Default select example">
        <option selected>Seleccione una consulta</option>
        <option id="1">Contacto de artistas</option>
        <option id="2">Entradas de cortesía de artistas</option>
        <option id="3">Información del Tour más reciente</option>
        <option id="4">Países de un Tour</option>
        <option id="5">Productoras de un artista</option>
        <option id="6">Hospedaje de artistas</option>
        <option id="7">Artista con mayor entrega de entradas de cortesía</option>
    </select>
    </form>

    <br>

    </div>
    <div class="container">
    
    <form action="index.php" method="post" id="form_1" class="myForm">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button id="clickMe" type="submit" class="btn btn-outline-primary">Consultar</button>
    </div>
    </form>

    <form action="index.php" method="post" id="form_2" class="myForm">
        <div id="divArtista" class="row mb-3">
            <label for="artistaInput" class="col-sm-2 col-form-label col-form-label-lg">Indique un artista</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="artista" id="artistaInput" placeholder="Bad Bunny" require></input>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button id="clickMe" type="submit" class="btn btn-outline-primary">Consultar</button>
        </div>
    </form>

    <form action="index.php" method="post" id="form_3" class="myForm">
        <div id="divArtista" class="row mb-3">
            <label for="artistaInput" class="col-sm-2 col-form-label col-form-label-lg">Indique un artista</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="artista" id="artistaInput" placeholder="Bad Bunny" require></input>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button id="clickMe" type="submit" class="btn btn-outline-primary">Consultar</button>
        </div>
    </form>

    <form action="index.php" method="post" id="form_4" class="myForm">
    <div id="divTour" class="row mb-3">
            <label for="tourInput" class="col-sm-2 col-form-label col-form-label-lg">Indique un tour</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="tour" id="tourInput" placeholder="World's Hottest Tour" require></input>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button id="clickMe" type="submit" class="btn btn-outline-primary">Consultar</button>
        </div>
    </form>

    <form action="index.php" method="post" id="form_5" class="myForm">
        <div id="divArtista" class="row mb-3">
            <label for="artistaInput" class="col-sm-2 col-form-label col-form-label-lg">Indique un artista</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="artista" id="artistaInput" placeholder="Bad Bunny" require></input>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button id="clickMe" type="submit" class="btn btn-outline-primary">Consultar</button>
        </div>
    </form>

    <form action="index.php" method="post" id="form_6" class="myForm">
        <div id="divArtista" class="row mb-3">
            <label for="artistaInput" class="col-sm-2 col-form-label col-form-label-lg">Indique un artista</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="artista" id="artistaInput" placeholder="Bad Bunny" require></input>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button id="clickMe" type="submit" class="btn btn-outline-primary">Consultar</button>
        </div>
    </form>


    <form action="index.php" method="post" id="form_7" class="myForm">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button id="clickMe" type="submit" class="btn btn-outline-primary">Consultar</button>
    </div>
    </form>
    </div>

    <br><br><br>

<div class="container" id="resultado">
    <?php
        $artista = $_POST["artista"] ?? null;
        $tour = $_POST["tour"] ?? null;
        
        if ($artista or $tour){
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
                    <p>No hay nada ingresado en la busqueda.</p>
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
    <script src="js/main.js"></script>'
    <script>
        //https://bootstrap-validate.js.org/v2/rules.html
        bootstrapValidate('#artistaInput', 'required:Este campo es requerido.|max:20:No es posible ingresar más de 20 caracteres.')
        bootstrapValidate('#tourInput', 'required:Este campo es requerido.|max:20:No es posible ingresar más de 20 caracteres.')
    </script>
    </body>
</html>