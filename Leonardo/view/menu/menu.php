<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Menu system</title>
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

    <main>
        <div class="message">
            <h1>Seja Bem-vindo</h1>
            <h3>Aproveite as oportunidades!</h3>
        </div>
    </main>

    <section id="section-content">
        <div class="block1 block">
            <img src="../menu/newMenu/images/imagem1.jpg" alt="" onclick="ir()">
            <h2>Acompanhamento de Peças</h2>
        </div>
        <script>
            function ir() {
                window.location.href = '../acompanhamento/listarAcompanhamento.php';
            }
        </script>
        <div class="block2 block">
            <img src="../menu/newMenu/images/imagem2.jpg" alt="" onclick="ir2()">
            <h2>Cadastros</h2>
        </div>
        <script>
            function ir2() {
                window.location.href = '../cadastro/listarCadastros.php';
            }
        </script>
        <div class="block3 block">
            <img src="../menu/newMenu/images/imagem3.jpg" alt="" onclick="ir3()">
            <h2>Carros Entregues</h2>
        </div>
        <script>
            function ir3() {
                window.location.href = '../carroEntregue/listarCarroEntregue.php';
            }
        </script>
        <div class="block4 block">
            <img src="../menu/newMenu/images/imagem4.jpg" alt="" onclick="ir4()">
            <h2>Carros em Serviço</h2>
        </div>
        <script>
            function ir4() {
                window.location.href = '../carroServico/listarCarroServico.php';
            }
        </script>
        <div class="block5 block">
            <img src="../menu/newMenu/images/imagem5.jpg" alt="">
            <h2>Carros Prontos para Entrega</h2>
        </div>
        <div class="block6 block">
            <img src="../menu/newMenu/images/imagem6.jpg" alt="">
            <h2>Carros Aguardando Manutenção</h2>
        </div>
        <div class="block7 block">
            <img src="../menu/newMenu/images/imagem7.jpg" alt="">
            <h2>Processos</h2>
        </div>
    </section>
    <script src="./configs.js"></script>
</body>

</html>
