<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Acompanhamento.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllAcompanhamento.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acompanhamento = new \MODEL\Acompanhamento(); 
   
    $acompanhamento->setNomePeca($_POST['name_peca']);
    $acompanhamento->setStatusPeca($_POST['status_peca']);
    $acompanhamento->setDiaChegada($_POST['dia-chegada']); 
    $acompanhamento->setIdAcompanhamento($_POST['idgroup']);

    $bll = new \BLL\bllAcompanhamento; 
    $bll->UpdateBanco($acompanhamento); 
    echo "<script>window.location.href = '../acompanhamento/listarAcompanhamento.php';</script>";
    exit;
}
?>
