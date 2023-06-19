<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-image: url("./images/sing-up.jpg");
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
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 100px;
        }

        .card {
            background-color: #ffffff80;
            padding: 30px;
            border-radius: 4%;
            box-shadow: 3px 3px 1px 0px #00000060
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #272262
        }

        .label-float input {
            width: 100%;
            padding: 5px 5px;
            display: inline-block;
            border: 0;
            border-bottom: 2px solid #272262;
            background-color: transparent;
            outline: none;
            min-width: 180px;
            font-size: 16px;
            transition: all .3s ease-out;
            border-radius: 0;

        }

        .label-float {
            position: relative;
            padding-top: 13px;
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .label-float input:focus {
            border-bottom: 2px solid darkred;
        }

        .label-float label {
            color: rgb(0, 0, 0);
            pointer-events: none;
            position: absolute;
            top: 0;
            left: 0;
            margin-top: 13px;
            transition: all .3s ease-out;
        }

        .label-float input:focus+label,
        .label-float input:valid+label {
            font-size: 13px;
            margin-top: 0;
            color: darkred;
        }

        .button {
            background-color: transparent;
            border-color: #272262;
            color: #272262;
            padding: 7px;
            font-weight: bold;
            font-size: 12pt;
            margin-top: 20px;
            border-radius: 4px;
            cursor: pointer;
            outline: none;
            transition: all .4s ease-out;
        }

        .button:hover {
            background-color: darkred;
            color: #fff;
        }

        .justify-center {
            display: flex;
            justify-content: center;
        }

        hr {
            margin-top: 10%;
            margin-bottom: 10%;
            width: 60%;
        }

        p {
            color: #272262;
            font-size: 14pt;
            text-align: center;
        }

        a {
            color: #050505;
            font-weight: bold;
            text-decoration: none;
            transition: all .3s ease-out;
        }

        a:hover {
            color: darkred;
        }

        .fa-eye {
            position: absolute;
            top: 15px;
            right: 10px;
            cursor: pointer;
            color: #272262;
        }

        #msgError {
            text-align: center;
            color: #ff0000;
            background-color: #ffbbbb;
            padding: 10px;
            border-radius: 4px;
            display: none;
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
            <li class="buttons" onclick="backToMenu()">BACK TO PAGE</li>
            <li class="buttons">REGISTER</li>
            <script src="../../settingsPage.js"></script>
        </ul>
    </header>
    <div class="container">
    <form action="enter.php" method="POST">
            <div class="card">
                <h1>Entrar</h1>

                <div id="msgError"></div>
                <div class="label-float">
                    <input  name="usuario" type="text" id="usuario" placeholder="" require/>
                    <label id="userLabel" for="usuario">Usuario</label>
                </div>

                <div class="label-float">
                    <input type="password" id="senha" placeholder="" name="senha" required />
                    <label id="senhaLabel" for="senha">Senha</label>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </div>

                <div class="justify-center">
                    <input type="submit" value="ENTRAR" class="button">
                </div>
                </form>
                <div class="justify-center">
                    <hr />
                </div>

                <p>
                    Não tem uma conta?
                    <a href="./signup.html">
                        Cadastre-se
                    </a>
                </p>
            </div>
    </div>
    <script>
        let btn = document.querySelector('.fa-eye')

        btn.addEventListener('click', () => {
            let inputSenha = document.querySelector('#senha')

            if (inputSenha.getAttribute('type') == 'password') {
                inputSenha.setAttribute('type', 'text')
            } else {
                inputSenha.setAttribute('type', 'password')
            }
        })
    </script>
</body>

</html>