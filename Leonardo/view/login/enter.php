<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllUsuario.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\usuario.php';

$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

echo "Usuario: " . $usuario . "</br>";
echo "Senha: " . md5($senha) . "</br>" . "</br>";

$bll = new  \BLL\bllUsuario();

$objUsuario = new \MODEL\Usuario();

$objUsuario = $bll->SelectUser($usuario);

if ($objUsuario != null) {
    if (md5($senha) == $objUsuario->getSenhaLoginDois()){
        echo "passei aqui";

        session_start();
        $_SESSION['login'] =  $objUsuario->getNomeUsuario() ;
        echo '<script>window.location.href = "../menu/menu.html";</script>';   
     }
    else {
        // echo '<script>window.location.href = "../menu/menu.html";</script>';
        
    }
}
else echo "usuario não encontrado";

?>