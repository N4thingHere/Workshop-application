<?php
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllCadastro.php';

$id = $_GET['id'];
$bll = new \BLL\bllCadastro();
$cadastro = $bll->SelectID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
</head>
<body>
    <form action="../editar/editarCadastroLogic.php" method="post">
        <label for="id">ID: <?php echo $cadastro->getIdCadastro(); ?></label>
        <input type="text" name="id" id="id" required placeholder="<?php echo $id?>">

        <label for="nome">Nome de Usuário: </label>
        <input type="text" name="nome" id="nome" placeholder="<?php echo $cadastro->getNomeLogin(); ?>">

        <label for="senha">Senha do Usuário:</label>
        <input type="text" name="senha" id="senha" placeholder="<?php echo $cadastro->getSenhaLogin(); ?>">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>