<?php

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllAcompanhamento.php';

use BLL\bllAcompanhamento;

$bll = new \BLL\bllAcompanhamento();
$acomp = $bll->Select();

?>
        <!-- <?php
        foreach($acomp as $acompanhamentoo) {
            ?>
        <tr>
            <td><?php echo $acompanhamentoo->getIdAcompanhamento(); ?></td> 
            <td><?php echo $acompanhamentoo->getNomePeca(); ?></td>
            <td><?php echo $acompanhamentoo->getStatusPeca(); ?></td>
            <td><?php echo $acompanhamentoo->getDiaChegada(); ?></td>
            </tr>
        <?php 
            }
        ?> -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Acompanhamento</title>
</head>
<body>
<nav class="navbar">
        <input type="checkbox" id="navbar-toggle" class="navbar-toggle">
        <label for="navbar-toggle" class="navbar-toggle-label">
            <span class="navbar-toggle-icon"></span>
        </label>

        <ul class="navbar-menu">
            <li><a href="#">Voltar para o ínicio</a></li>
            <li><a href="#">Consultaroria</a></li>
            <li><a href="#">Trocar Usuário</a></li>
            <li><a href="#">Sair</a></li>
        </ul>
    </nav>

    <main class="main">
        <h1>Acompanhamento de Peças</h1>
    </main>

    <section class="section-options">
        <span class="bloco1 bloco"><i class="large material-icons">contacts</i></span>

        <span class="bloco2 bloco"><i class="large material-icons">build</i></span>

        <span class="bloco3 bloco"><i class="large material-icons">flight</i></span>

        <span class="bloco4 bloco"><i class="large material-icons">local_shipping</i></span>

    </section>

    <script src="./mainJsAcompanhamento.js"></script>
</body>
</html>