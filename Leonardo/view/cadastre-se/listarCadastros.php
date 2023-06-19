<?php
include_once 'C:\XAMPP\htdocs\Matheus\BLL\bllCadastro.php';

use BLL\bllCadastro;

$bll = new \BLL\bllCadastro();
$oficina = $bll->Select();
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
                <h1>Cadastros</h1>
            </div>
            <table class="centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Empresa</th>
              <th>Processo</th>
              <th>Nome do Cliente</th>
              <th>Endereço do Cliente</th>
              <th>Cidade do Cliente</th>
              <th>Estado do Cliente</th>
              <th>CPF do Cliente</th>
              <th>Telefone do Cliente</th>
              <th>Fabricante do Veículo</th>
              <th>Nome do Veículo</th>
              <th>Modelo do Veículo</th>
              <th>Ano do Veículo</th>
              <th>Placa do Veículo</th>
              <th>Cor do Veículo</th>
              <th>Chassi do Veículo</th>
              <th>Cia de Seguros</th>
              <th>Dt Sinistro</th>
              <th>Numero do Sinistro</th>
              <th>Segurado</th>
              <th>Data da Vistoria</th>
              <th>Data da Liberação</th>
              <th>Franquia</th>
              <th>Desconto</th>
              <th>Orçamentista</th>
              <th>Consultor</th>
              <th>Observações</th>
              <th>Nome de Usuario</th>
              <th>Email para Contato</th>
              <th>Senha do Usuario</th>
              
          </tr>
        </thead>

        <tbody>

        <?php
            foreach($oficina as $oficinaa) {
        ?>
<tr>
            <td><?php echo $oficinaa->getId(); ?></td>

            <td><?php echo $oficinaa->getEmpresa(); ?></td>

            <td><?php echo $oficinaa->getProcesso(); ?></td>

            <td><?php echo $oficinaa->getNomeCliente(); ?></td>

            <td><?php echo $oficinaa->getEnderecoCliente(); ?></td>

            <td><?php echo $oficinaa->getCidadeCliente(); ?></td>

            <td><?php echo $oficinaa->getEstadoCliente(); ?></td>

            <td><?php echo $oficinaa->getCPF(); ?></td>

            <td><?php echo $oficinaa->getTelefone(); ?></td>

            <td><?php echo $oficinaa->getFabricante(); ?></td>

            <td><?php echo $oficinaa->getNomeVeiculo(); ?></td>

            <td><?php echo $oficinaa->getModeloVeiculo(); ?></td>
            <td><?php echo $oficinaa->getAnoPlaca(); ?></td>

            <td><?php echo $oficinaa->getPlacaVeiculo(); ?></td>

            <td><?php echo $oficinaa->getCorVeiculo(); ?></td>

            <td><?php echo $oficinaa->getChassi(); ?></td>

            <td><?php echo $oficinaa->getCiaSeguros(); ?></td>

            <td><?php echo $oficinaa->getDtSinistro(); ?></td>

            <td><?php echo $oficinaa->getNumeroSinistro(); ?></td>

            <td><?php echo $oficinaa->getSegurado(); ?></td>

            <td><?php echo $oficinaa->getDataVistoria(); ?></td>

            <td><?php echo $oficinaa->getDataLiberacao(); ?></td>

            <td><?php echo $oficinaa->getFranquia(); ?></td>

            <td><?php echo $oficinaa->getDesconto(); ?></td>

            <td><?php echo $oficinaa->getOrcamentista(); ?></td>

            <td><?php echo $oficinaa->getConsultor(); ?></td>

            <td><?php echo $oficinaa->getObservacoes(); ?></td>

            <td><?php echo $oficinaa->getNomeUsuario(); ?></td>

            <td><?php echo $oficinaa->getEmail(); ?></td>

            <td><?php echo $oficinaa->getSenhaUsuario(); ?></td>
            
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