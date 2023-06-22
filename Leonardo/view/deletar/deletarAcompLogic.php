<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Acompanhamento.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllAcompanhamento.php';

   $id = $_GET['id'];

   $bll = new \BLL\bllAcompanhamento(); 
   $bll->Delete($id); 

   echo "<script>window.location.href = '../acompanhamento/listarAcompanhamento.php';</script>";
?>
