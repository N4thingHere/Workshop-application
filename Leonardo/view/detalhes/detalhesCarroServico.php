<?php 
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroServico.php';
$id = $_GET['id'];

$bll = new \BLL\bllCarroServico();
$servico = $bll->SelectID($id);


echo "<script>window.location.href = '../deletar/deletarCarroSLogic.php?id= + $id';</script>";
?>