<?php 
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroEntregue.php';
$id = $_GET['id'];

$bll = new \BLL\bllCarroEntregue();
$entregue = $bll->SelectID($id);


echo "<script>window.location.href = '../deletar/deletarCarroELogic.php?id= + $id';</script>";
?>