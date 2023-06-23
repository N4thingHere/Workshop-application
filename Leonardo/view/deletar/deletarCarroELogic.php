<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\CarroEntregue.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroEntregue.php';


$id = $_GET['id'];

$bll = new \BLL\bllCarroEntregue(); 
$bll->Delete($id); 

echo "<script>window.location.href = '../carroEntregue/listarCarroEntregue.php';</script>";
?>