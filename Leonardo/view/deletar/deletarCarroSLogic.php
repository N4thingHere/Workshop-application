<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\CarroServico.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroServico.php';
$id = $_GET['id'];

$bll = new \BLL\bllCarroServico(); 
$bll->Delete($id); 

echo "<script>window.location.href = '../carroServico/listarCarroServico.php';</script>";
?>