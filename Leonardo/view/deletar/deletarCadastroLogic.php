<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Cadastro.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCadastro.php';

   $id = $_GET['id'];

   $bll = new \BLL\bllCadastro(); 
   $bll->Delete($id); 

   echo "<script>window.location.href = '../cadastro/listarCadastros.php';</script>";
?>
