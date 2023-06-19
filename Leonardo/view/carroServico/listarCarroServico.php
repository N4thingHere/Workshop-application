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
    <header id="header">
        <ul class="informations">
            <li class="buttons">HOME</li>
            <li class="buttons">ABOUT US</li>
            <li class="buttons">SERVICES</li>
            <li class="buttons">APPOINTMENTS</li>
            <li class="buttons">COUPONS</li>
            <li class="buttons">FAQ</li>
            <li class="buttons">CONTACT US</li>
        </ul>
        <ul class="checkout">
            <li class="buttons" onclick="pageLogin()">LOGIN</li>
            <li class="buttons">REGISTER</li>
            <script src="../settingsPage.js"></script>
        </ul>
    </header>

        <div class="container black-text">
            <div class="center">
                <h1>Carros em Serviço</h1>
            </div>
            <table class="centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Placa do Carro</th>
              <th>Final da Placa do Carro</th>
              <th>Nome do Proprietario</th>
          </tr>
        </thead>

        <tbody>
            <?php
                foreach($servc as $s) {
                    ?>
                    <tr>
                <td><?php echo $s->getIdCarroServico(); ?></td>
    
                <td><?php echo $s->getPlacaCarroServico(); ?></td>
    
                <td><?php echo $s->getFinalPlacaCarroServico(); ?></td>
    
                <td><?php echo $s->getNomeProprietarioCarroServico(); ?></td>
                </tr>
            <?php 
                }
            ?>
            </tbody>
      </table>  

      <div class="icones">
      <i class="large material-icons">add</i>
      <i class="large material-icons">code</i>
      <i class="large material-icons">clear</i>
      </div>
