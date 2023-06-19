<?php
$servername = "localhost"; // substitua pelo nome do servidor do banco de dados
$username = "root"; // substitua pelo seu nome de usuário do banco de dados
$password = ""; // substitua pela sua senha do banco de dados
$dbname = "oficina"; // substitua pelo nome do seu banco de dados

// Cria uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtem os valores dos campos de entrada
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeat_password"];

    // Validações dos campos
    $errors = array();

    // Validação do campo "Username"
    if (empty($username)) {
        $errors[] = "O campo de usuário é obrigatório.";
    }

    // Validação do campo "Password"
    if (empty($password)) {
        $errors[] = "O campo de senha é obrigatório.";
    }

    // Validação do campo "Repeat Password"
    if (empty($repeatPassword)) {
        $errors[] = "É obrigatório repetir a senha.";
    } elseif ($password !== $repeatPassword) {
        $errors[] = "As senhas não correspondem.";
    }

    // Verifica se houve erros de validação
    if (empty($errors)) {
        // Criptografa a senha usando md5
        $hashedPassword = md5($password);

        // Insere os dados no banco de dados
        $sql = "INSERT INTO login (nome_login, senha_login) VALUES ('$username', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro realizado com sucesso!";
        } else {
            echo "Erro ao registrar os dados: " . $conn->error;
        }
    } else {
        // Exibe os erros de validação para o usuário
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

// Feche a conexão com o banco de dados
$conn->close();
?>
