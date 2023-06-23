<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllUsuario.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\usuario.php';

$usuario = trim($_POST['user']);
$senha = trim($_POST['password']);

// echo "Usuario: " . $usuario . "</br>";
// echo "Senha: " . md5($senha) . "</br>" . "</br>";

$bll = new  \BLL\bllUsuario();

$objUsuario = new \MODEL\Usuario();

$objUsuario = $bll->SelectUser($usuario);

if ($objUsuario != null) {
    if (md5($senha) == $objUsuario->getSenhaLoginDois()){

        session_start();
        $_SESSION['login'] =  $objUsuario->getNomeUsuario() ;
        echo '<script>window.location.href = "../menu/menu.php";</script>';   
     }
    else {
        echo '<script>window.location.href = "./error404/error404.html";</script>';
        
    }
}
else echo "usuario não encontrado";

?>