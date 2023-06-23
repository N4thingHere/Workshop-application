<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCarroServico.php';
$id = $_GET['id'];
$bll = new \BLL\bllCarroServico();
$servico = $bll->SelectID($id);
?>

<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 2px solid rgb(100, 100, 100);
      border-radius: 5px;
    }

    .form-container h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group textarea {
      width: 100%;
      padding: 5px;
      border: 1px solid rgb(200, 200, 200);
      border-radius: 3px;
    }

    .form-group input[type="submit"] {
      background-color: rgb(0, 150, 255);
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: rgb(0, 120, 200);
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h2>Formulário</h2>
    <form id="myForm" method="POST" action="../editar/editarCarroSLogic.php">
      <div class="form-group">
        <label for="id">ID: <?php echo $servico->getIdCarroServico(); ?></label>
        <input type="text" name="id" required placeholder="<?php echo $id ?>">
        <label for="placa">Placa do veículo: </label>
        <input type="text" id="name" name="placa" required placeholder="<?php echo $servico->getPlacaCarroServico(); ?>">
      </div>
      <div class="form-group">
        <label for="email">Final da Placa do Veículo:</label>
        <input type="text" id="email" name="fim" required placeholder="<?php echo $servico->getFinalPlacaCarroServico(); ?>">
      </div>
      <div class="form-group">
        <label for="dia-chegada">Nome do Proprietario do Veículo:</label>
        <input type="text" name="nome" id="nome" placeholder="<?php echo $servico->getNomeProprietarioCarroServico(); ?>">
      </div>
      <div class="form-group">
        <input type="submit" value="Enviar">
      </div>
    </form>
  </div>
</body>

</html>