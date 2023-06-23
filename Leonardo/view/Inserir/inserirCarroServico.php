<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Carros Entregues</title>
</head>
<body>
<div class="form-container">
    <h2>Formulário</h2>
    <form id="myForm" method="post" action="../inserir/inserirCarroSLogic.php">
      <div class="form-group">
        <label for="placa">Placa do veículo:</label>
        <input type="text" id="name" name="placa" placeholder="xxxxx-x" required>
      </div>
      <div class="form-group">
        <label for="fim">Final da Placa do veículo:</label>
        <input type="text" id="email" name="fim" placeholder="x" required>
      </div>
      <div class="form-group">
        <label for="nome">Nome do Proprietario do veículo:</label>
        <input type="text" name="nome" id="dia-chegada" placeholder="Fulano...">
    </div>
      <div class="form-group">
        <input type="submit" value="Enviar">
      </div>
    </form>
  </div>
</body>
</html>