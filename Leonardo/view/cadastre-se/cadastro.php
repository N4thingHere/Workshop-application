<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Cadastre-se</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("../login/images/sing-up.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 60px;
            background-color: black;
            position: static;
            top: 0;
        }

        .informations {
            font-weight: bold;
            color: white;
            list-style-type: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 35px;
            margin-left: 50px;
            margin-top: 13px;
        }

        .checkout {
            font-weight: bold;
            color: white;
            list-style-type: none;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 70px;
            margin-right: 50px;
            margin-top: 13px;
        }

        .buttons {
            cursor: pointer;
            position: relative;
            color: white;
            list-style-type: none;
            display: inline-block;
            margin-right: 20px;
            transition: color 0.3s ease-in-out;
        }

        .buttons:hover {
            color: red;
        }

        .buttons::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            width: 100%;
            height: 2px;
            background: transparent;
            transition: background 0.2s ease-in-out;
            transform: scaleX(0);
            transform-origin: left;
        }

        .buttons:hover::after {
            background: red;
            transform: scaleX(1);
        }

        .container {
            max-width: 400px;
            margin-top: 100px;
            padding: 30px;
            background-color: #ffffff80;
            border-radius: 10px;
            box-shadow: 3px 3px 1px 0px #00000060;
        }

        form {
            display: grid;
            gap: 20px;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        input[type="tel"],
        input[type="date"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #f1f1f1;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="number"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus {
            outline: none;
            background-color: #e6e6e6;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
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
            <li class="buttons">LOGIN</li>
            <li class="buttons">BACK TO PAGE</li>
        </ul>
    </header>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <span>
                    <h3 style="color: darkred; margin-left: 100px;">Cadastre-se</h3>
                </span>
                <hr style="padding: 0; margin: 0;">
            </div>
            <div class="car-informations">
                <div class="mb-3">
                    <input type="checkbox" name="terceiro" id="Terceiro" class="form-check-input" style="border-radius: 50%;">
                    <label for="terceiro" class="form-check-label">Terceiro</label>
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="segurado" id="Segurado" class="form-check-input" style="border-radius: 50%;">
                    <label for="segurado" class="form-check-label">Segurado</label>
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="particular" id="Particular" class="form-check-input" style="border-radius: 50%;">
                    <label for="perticular" class="form-check-label">Particular</label>
                </div>

                <div class="mb-3">
                    <label for="empresa" class="form-label">Empresa:</label>
                    <input type="text" name="empresa" id="Empresa" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="processo" class="form-label">Processo:</label>
                    <input type="text" name="processo" id="Processo" class="form-control">
                </div>
            </div>
            <hr style="padding: 0; margin: 0;">
            <span style="padding: 0; margin: 0;">
                <h5 style="padding: 0; margin: 0; margin-left: 70px;">Informações do Cliente</h5>
            </span>
            <hr style="padding: 0; margin: 0;">
            <div class="cliente-informations">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" id="Nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" name="endereco" id="Endereco" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" name="cidade" id="Cidade" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado:</label>
                    <input type="text" name="estado" id="Estado" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CGC/CPF:</label>
                    <input type="text" name="cpf" id="CPF" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="tel" name="telefone" id="Telefone" class="form-control">
                </div>
            </div>
            <hr style="padding: 0; margin: 0;">
            <span style="padding: 0; margin: 0;">
                <h5 style="padding: 0; margin: 0; margin-left: 70px;">Informações do Veículo</h5>
            </span>
            <hr style="padding: 0; margin: 0;">
            <div class="vehicle">
                <div class="mb-3">
                    <label for="fabricante" class="form-label">Fabricante:</label>
                    <input type="text" name="fabricante" id="Fabricante" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="veiculo" class="form-label">Veículo:</label>
                    <input type="text" name="veiculo" id="Veiculo" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" name="modelo" id="Modelo" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="ano" class="form-label">Ano:</label>
                    <input type="text" name="ano" id="Ano" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="placa" class="form-label">Placa:</label>
                    <input type="text" name="placa" id="Placa" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="cor" class="form-label">Cor:</label>
                    <input type="text" name="cor" id="Cor" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="chassi" class="form-label">Chassi:</label>
                    <input type="text" name="chassi" id="Chassi" class="form-control">
                </div>
            </div>
            <hr style="padding: 0; margin: 0;">
            <span style="padding: 0; margin: 0;">
                <h5 style="padding: 0; margin: 0; margin-left: 55px;">Informações da Seguradora</h5>
            </span>
            <hr style="padding: 0; margin: 0;">
            <div class="seguradora">
                <div class="mb-3">
                    <label for="seguros" class="form-label">Cia de Seguros:</label>
                    <input type="text" name="seguros" id="Seguros" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sinistro" class="form-label">Dt.Sinistro:</label>
                    <input type="date" name="sinistro" id="Sinistro" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="numero-sinistro" class="form-label">N° Sinistro:</label>
                    <input type="number" name="numero-sinistro" id="Numero-Sinistro" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="segurado" class="form-label">Segurado:</label>
                    <input type="text" name="segurado" id="Segurado" class="form-control">
                </div>
            </div>
            <hr style="padding: 0; margin: 0;">
            <span style="padding: 0; margin: 0;">
                <h5 style="padding: 0; margin: 0; margin-left: 90px;">Outras Informações</h5>
            </span>
            <hr style="padding: 0; margin: 0;">
            <div class="outros">
                <div class="mb-3">
                    <label for="data-vistoria" class="form-label">Data Vistoria:</label>
                    <input type="date" name="data-vistoria" id="Data-Vistoria" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="data-liberacao" class="form-label">Data Liberação:</label>
                    <input type="date" name="data-liberacao" id="Data-Liberacao" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="franquia" class="form-label">Franquia:</label>
                    <input type="text" name="franquia" id="Franquia" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="desconto" class="form-label">Desconto:</label>
                    <div class="input-group">
                        <input type="number" name="desconto" id="Desconto" class="form-control">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
            <hr style="padding: 0; margin: 0;">
            <span style="padding: 0; margin: 0;">
                <h5 style="padding: 0; margin: 0; margin-left: 110px;">Orçamentista</h5>
            </span>
            <hr style="padding: 0; margin: 0;">
            <div class="orcamentista">
                <div class="mb-3">
                    <label for="orcamentista" class="form-label">Orçamentista:</label>
                    <input type="text" name="orcamentista" id="Orcamentista" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="consultor" class="form-label">Consultor:</label>
                    <input type="text" name="consultor" id="Consultor" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="obs" class="form-label">Observações:</label>
                    <input type="text" name="obs" id="Obs" class="form-control">
                </div>
            </div>
            <hr style="padding: 0; margin: 0;">
            <span style="padding: 0; margin: 0;">
                <h5 style="padding: 0; margin: 0; margin-left: 70px;">Informações para Login</h5>
            </span>
            <hr style="padding: 0; margin: 0;">
            <div class="login-settings">
                <div class="mb-3">
                    <label for="nome-usuario" class="form-label">Nome de Usuário:</label>
                    <input type="text" name="nome-usuario" id="Nome-Usuario" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email-usuario" class="form-label">Email para Contato:</label>
                    <input type="text" name="email-usuario" id="Email-Usuario" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="senha-usuario" class="form-label">Senha:</label>
                    <input type="password" name="senha-usuario" id="Senha-Usuario" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="conf-senha-usuario" class="form-label">Confirmação de Senha:</label>
                    <input type="password" name="conf-senha-usuario" id="Conf-Senha-Usuario" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <input type="submit" value="Registrar" style="margin-left: 122px; background-color: darkred; font-weight: bold; ">
            </div>
            <div class="mb-3">
                <span>
                    <h5 style="margin-left: 70px;">Já possui uma conta?</h5>
                </span>
                <span>
                    <h5><a href="../login/login.html" style="text-decoration: none; color: darkred; margin-left: 120px;">Faça login</a></h5>
                </span>
                <hr style="padding: 0; margin: 0; color: darkred; font-weight: bold;">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>