<?php
require_once 'C:\XAMPP\htdocs\Matheus\DAL\conexao.php'; // Certifique-se de incluir o arquivo que contém a classe de conexão

try {
    $conexao = \DAL\Conexao::conectar();
    echo "Conexão bem-sucedida!"; // Se essa mensagem for exibida, a conexão foi estabelecida com sucesso
    \DAL\Conexao::desconectar(); // Opcional: desconecte-se do banco de dados após o teste
} catch (\PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>
