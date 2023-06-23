<?php
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\CarroServico.php';
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroServico.php';

    $carro = new \MODEL\CarroServico();

    $carro->setPlacaCarroServico($_POST['placa']);
    $carro->setFinalPlacaCarroServico($_POST['fim']);
    $carro->setNomeProprietarioCarroServico($_POST['nome']);

    $bll = new \BLL\bllCarroServico();
    $bll->Insert($carro);

    echo "<script>window.location.href = '../carroServico/listarCarroServico.php';</script>";
    ?>