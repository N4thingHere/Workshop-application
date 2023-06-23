<?php 
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCadastro.php';
    use BLL\bllCadastro;

    $bll = new \BLL\bllCadastro();
    $cad = $bll->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleCadastro.css">

    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

    <title>Cadastro</title>
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
        <h1>Cadastros</h1>
    </main>

    <section class="section-options">
        <?php
            foreach($cad as $cadastros) {
        ?>
                <span class="bloco1 bloco"><i class="large material-icons">assignment_ind</i></span>
                <h6>ID:</h6>
                <span><?php echo $cadastros->getIdCadastro(); ?></span>
                <span class="bloco2 bloco"><i class="large material-icons">account_circle</i></span>
                <h6>Nome de Usuário:</h6>
                <span><?php echo $cadastros->getNomeLogin(); ?></span>
                <span class="bloco3 bloco"><i class="large material-icons">https</i></span>
                <h6>Senha do Usuário:</h6>
                <span><?php echo $cadastros->getSenhaLogin(); ?></span>
                <article class="article">
                    <div class="icones">
                    <i onclick="inserirCadastro()"  class="large material-icons">add</i>
                    <i onclick="JavaScript:location.href='../editar/editarCadastro.php?id=' +
                                    <?php echo $cadastros->getIdCadastro(); ?>" class="large material-icons">compare_arrows</i>
                    <i onclick="JavaScript: removerCadastro(<?php echo $cadastros->getIdCadastro(); ?>)" class="large material-icons">delete</i>
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


        function inserirCadastro() {
            window.location.href = '../login-register/newLogin/newlogin.php';
        }

        function removerCadastro(id) {
            if(confirm('Excluir o cadastro ' + id + '?')) {
                window.location.href = '../detalhes/detalhesCadastro.php?id=' + id;
            }
        }
    </script>
</body>
</html>

