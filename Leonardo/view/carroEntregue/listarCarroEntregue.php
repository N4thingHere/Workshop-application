<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroEntregue.php';

use BLL\bllCarroEntregue;

$bll = new \BLL\bllCarroEntregue();
$pronto = $bll->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Entregues</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
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
            <li><a href="../login-register/newLogin/logout.php">Sair</a></li>
        </ul>
    </nav>

    <main class="main">
        <h1>Carros Entregues</h1>
    </main>  
    <section class="section-options">
        <?php
            foreach ($pronto as $p) {
        ?>
                <span class="bloco1 bloco"><i class="large material-icons">assignment_ind</i></span>
                <h6>ID:</h6>
                <span><?php echo $p->getIdCarroEntregue(); ?></span>
                <span class="bloco2 bloco"><i class="large material-icons">assignment</i></span>
                <h6>Placa do Carro:</h6>
                <span><?php echo $p->getPlacaCarroEntregue(); ?></span>
                <span class="bloco3 bloco"><i class="large material-icons">assistant</i></span>
                <h6>Final da Placa do Carro:</h6>
                <span><?php echo $p->getFinalPlacaCarroEntregue(); ?></span>
                <span class="bloco4 bloco"><i class="large material-icons">face</i></span>
                <h6>Nome do Proprietario do Carro:</h6>
                <span><?php echo $p->getNomeProprietarioCarroEntregue(); ?></span>
                <article class="article">
                    <div class="icones">
                    <i onclick="inserirCarroEntregue()"  class="large material-icons">add</i>
                    <i  onclick="JavaScript:location.href='../editar/editarCarroEntregue.php?id=' +
                                    <?php echo $p->getIdCarroEntregue(); ?>" class="large material-icons">compare_arrows</i>
                    <i  onclick="JavaScript: removerCarro(<?php echo $p->getIdCarroEntregue(); ?>)" class="large material-icons">delete</i>
                    </div>
                </article>
        <?php
            }
        ?>
    </section>
    <script>
        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.querySelector('.navbar-menu');

        navbarToggle.addEventListener('change', function() {
            if (this.checked) {
                navbarMenu.style.maxHeight = navbarMenu.scrollHeight + 'px';
            } else {
                navbarMenu.style.maxHeight = '0';
            }
        });

        function inserirCarroEntregue() {
            window.location.href = '../Inserir/inserirCarroEntregue.php';
        }

        function removerCarro(id) {
            if(confirm('Excluir o Carro Entregue ' + id + '?')) {
                window.location.href = '../detalhes/detalhesCarroEntregue.php?id=' + id;
            }
        }
    </script>
</body>