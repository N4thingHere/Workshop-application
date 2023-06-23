<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\CarroServico.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroServico.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Servico = new \MODEL\CarroServico(); 
   
    $Servico->setIdCarroServico($_POST['id']);
    $Servico->setPlacaCarroServico($_POST['placa']);
    $Servico->setFinalPlacaCarroServico($_POST['fim']); 
    $Servico->setNomeProprietarioCarroServico($_POST['nome']);

    $bll = new \BLL\bllCarroServico; 
    $bll->Update($Servico); 
    echo "<script>window.location.href = '../carroServico/listarCarroServico.php';</script>";
    exit;
}
?>