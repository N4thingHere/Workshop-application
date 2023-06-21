<?php 
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllAcompanhamento.php';
    $id = $_GET['id'];
    $bll = new \BLL\bllAcompanhamento();
    $acompanhamento = $bll->SelectID($id);

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
    <form id="myForm" method="post" action="../Inserir/inserirAcompanhamentoLogic.php">
      <div class="form-group">
        <label for="name">Nome da Peça: <?php echo $acompanhamento->getIdAcompanhamento(); ?></label>
        <input type="text" id="name" name="name" placeholder="Parafuso..." required >
      </div>
      <div class="form-group">
        <label for="email">Status da Peça:</label>
        <input type="text" id="email" name="peca" placeholder="A caminho..." required>
      </div>
      <div class="form-group">
        <label for="dia-chegada">Dia da Chegada:</label>
        <input type="text" name="dia-chegada" id="dia-chegada" placeholder="99/99/9999">
    </div>
      <div class="form-group">
        <input type="submit" value="Enviar">
      </div>
    </form>
  </div>
</body>
</html>
