<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\CarroEntregue.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroEntregue.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entregue = new \MODEL\CarroEntregue(); 
   
    $entregue->setIdCarroEntregue($_POST['id']);
    $entregue->setPlacaCarroEntregue($_POST['placa']);
    $entregue->setFinalPlacaCarroEntregue($_POST['fim']); 
    $entregue->setNomeProprietarioCarroEntregue($_POST['nome']);

    $bll = new \BLL\bllCarroEntregue; 
    $bll->Update($entregue); 
    echo "<script>window.location.href = '../carroEntregue/listarCarroEntregue.php';</script>";
    exit;
}
?>
