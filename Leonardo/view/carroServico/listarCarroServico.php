<?php 
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroServico.php';
    
    use BLL\bllCarroServico;
    
    $bll = new \BLL\bllCarroServico();
    $servc = $bll->Select();
    ?>
    
    <!DOCTYPE html>
    <html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalhes de Operador</title>
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
        <h1>Carros em Serviço</h1>
    </main>  
    <section class="section-options">
        <?php
                foreach($servc as $s) {
        ?>
                <span class="bloco1 bloco"><i class="large material-icons">assignment_ind</i></span>
                <h6>ID:</h6>
                <span><?php echo $s->getIdCarroServico(); ?></span>
                <span class="bloco2 bloco"><i class="large material-icons">assignment</i></span>
                <h6>Placa do Carro:</h6>
                <span><?php echo $s->getPlacaCarroServico(); ?></span>
                <span class="bloco3 bloco"><i class="large material-icons">assistant</i></span>
                <h6>Final da Placa do Carro:</h6>
                <span><?php echo $s->getFinalPlacaCarroServico(); ?></span>
                <span class="bloco4 bloco"><i class="large material-icons">face</i></span>
                <h6>Nome do Proprietario do Carro:</h6>
                <span><?php echo $s->getNomeProprietarioCarroServico(); ?></span>
                <article class="article">
                    <div class="icones">
                    <i onclick="inserirCarro()"  class="large material-icons">add</i>
                    <i  onclick="JavaScript:location.href='../editar/editarCarroServico.php?id=' +
                                    <?php echo $s->getIdCarroServico(); ?>" class="large material-icons">compare_arrows</i>
                    <i  onclick="JavaScript: removerCarro(<?php echo $s->getIdCarroServico(); ?>)" class="large material-icons">delete</i>
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

        function inserirCarro() {
            window.location.href = '../Inserir/inserirCarroServico.php';
        }

        function removerCarro(id) {
            if(confirm('Excluir o Carro Entregue ' + id + '?')) {
                window.location.href = '../detalhes/detalhesCarroServico.php?id=' + id;
            }
        }
    </script>
</body>

