<?php
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCadastro.php';

    $id = $_GET['id'];

    $bll = new \BLL\bllCadastro();
    $cadastro = $bll->SelectID($id);

    echo "<script>window.location.href = '../deletar/deletarCadastroLogic.php?id= + $id';</script>";
?>