<?php 
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Cadastro.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCadastro.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadastro= new \MODEL\Cadastro(); 
   
    $cadastro->setIdCadastro($_POST['id']);
    $cadastro->setNomeLogin($_POST['nome']);
    $cadastro->setSenhaLogin($_POST['senha']); 

    $bll = new \BLL\bllCadastro; 
    $bll->Update($cadastro); 
    echo "<script>window.location.href = '../cadastro/listarCadastros.php';</script>";
    exit;
}
?>
?>