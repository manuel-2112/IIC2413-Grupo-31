<?php
	ob_start();
	session_start();
?>

<?php
    require ('../consultas/obtener_tipo_usuario.php');
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
    {   
        $tipo = returnTipoUsuario($_POST['username'], $_POST['password']);
        if ($tipo != []) {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['tipo'] = $tipo;

            $msg = 'se ha iniciado sesion correctamente';
            header("Location: ../index.php?msg=$msg");
        } 
        else {
        $msg = 'Contraseña Incorrecta';
        header("Location: ../views/login.php?msg=$msg"); ?>
        
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Los datos son incorrectos</h4>
        <hr>
        <p>Revisalos y vuelve a intentar.</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php
        }   
    }
?>