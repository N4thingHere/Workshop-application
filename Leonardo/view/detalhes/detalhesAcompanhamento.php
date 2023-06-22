<?php 
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllAcompanhamento.php';
$id = $_GET['id'];

$bll = new \BLL\bllAcompanhamento();
$acompanhamento = $bll->SelectID($id);


echo "<script>window.location.href = '../deletar/deletarAcompLogic.php?id= + $id';</script>";
?>
