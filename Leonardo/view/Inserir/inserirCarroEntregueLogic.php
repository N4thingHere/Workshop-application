<?php
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\CarroEntregue.php';
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroEntregue.php';

    $carro = new \MODEL\CarroEntregue();

    $carro->setPlacaCarroEntregue($_POST['placa']);
    $carro->setFinalPlacaCarroEntregue($_POST['fim']);
    $carro->setNomeProprietarioCarroEntregue($_POST['nome']);

    $bll = new \BLL\bllCarroEntregue();
    $bll->Insert($carro);

    echo "<script>window.location.href = '../carroEntregue/listarCarroEntregue.php';</script>";
    ?>