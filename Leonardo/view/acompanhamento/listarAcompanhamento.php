<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllAcompanhamento.php';
use BLL\bllAcompanhamento;
$bll = new \BLL\bllAcompanhamento();
$acomp = $bll->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleAcompanhamento.css">
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
            <li><a href="../login-register/newLogin/logout.php">Sair</a></li>
        </ul>
    </nav>

    <main class="main">
        <h1>Acompanhamento de Peças</h1>
    </main>

    <section class="section-options">
        <?php
        foreach ($acomp as $acompanhamentoo) {
        ?>
            <span class="bloco1 bloco"><i class="large material-icons">contacts</i></span>
            <h6>ID</h6>
            <span><?php echo $acompanhamentoo->getIdAcompanhamento(); ?></span>
            <span class="bloco2 bloco"><i class="large material-icons">build</i></span>
            <h6>Nome do Produto</h6>
            <span><?php echo $acompanhamentoo->getNomePeca(); ?></span>
            <span class="bloco3 bloco"><i class="large material-icons">flight</i></span>
            <h6>Status da Entrega</h6>
            <span><?php echo $acompanhamentoo->getStatusPeca(); ?></span>
            <span class="bloco4 bloco"><i class="large material-icons">local_shipping</i></span>
            <h6>Dia da Chegada</h6>
            <span><?php echo $acompanhamentoo->getDiaChegada(); ?></span>
            <article class="article">
                <div class="icones">
                    <i onclick="inserirAcompanhamento()" class="material-icons">add</i>
                    <i onclick="JavaScript:location.href='../editar/editarAcompanhamento.php?id=' +
                                    <?php echo $acompanhamentoo->getIdAcompanhamento(); ?>" class="material-icons">compare_arrows</i>
                    <i onclick="JavaScript: removerAcompanhamento(<?php echo $acompanhamentoo->getIdAcompanhamento(); ?>)" class="material-icons">delete</i>
                </div>
            </article>
        <?php
        }
        ?>
    </section>
    <script>
        function inserirAcompanhamento() {
            window.location.href = '../Inserir/inserirAcompanhamento.php';
        }

        function removerAcompanhamento(id) {
            if(confirm('Excluir o Acompanhamento ' + id + '?')) {
                window.location.href = '../detalhes/detalhesAcompanhamento.php?id=' + id;
            }
        }
    </script>
    <script src="./mainJsAcompanhamento.js"></script>
</body>
</html>