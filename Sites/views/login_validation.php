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
            header("Location: ../index.php");
        } 
        else {
        $msg = 'Contraseña Incorrecta';
        header("Location: ../views/login.php?msg=$msg");
        }   
    }
?>