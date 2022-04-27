<?php

    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['telefone']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");

    }

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Somos uma agência apaixonada por inovação!">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Cadastro</title>

    <link rel="stylesheet" href="src/css/estilos.css">



    <!-- Estilizando dentro da head-html -->


    <style>
        section {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(241, 242, 245), rgb(241, 242, 245));
            padding: 1px;

        }

        /* caixa formulario*/

        .box {
            color: rgb(255, 255, 255);
            top: 50%;
            left: 50%;
            background-color: rgb(214, 225, 235);
            padding: 25px;
            border-radius: 15px;
            width: 26%;
            margin-top: 10px;
            position: relative;
            transform: translate(-50%, 0%);
            margin: 50px 0;
            box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.2), 0 5px 0 rgba(0, 0, 0, 0.24);

        }

        fieldset {
            border: 1px solid rgb(0, 0, 0);
            padding: 5px;
        }

        legend {
            border: 1.25px solid rgb(0, 0, 0);
            padding: 12px;
            text-align: center;
            background-color: #47b1d1;
            border-radius: 8px;
            
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid rgb(110, 108, 108);
            outline: none;
            color: rgb(0, 0, 0);
            font-size: 10px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: rgb(72, 146, 243)
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            cursor: pointer;
            background: #47b1d1;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
            cursor: pointer;
        }

        #submit:hover {
            background: #4892f3;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }
    </style>



</head>


<body>

    <!-- Cabeçalho -->

    <header class="cabecalho">
        <a href="index.html" class="logo">
            <img src="src/imagens/Logo-completa.jpeg" alt="logo ZN" class="imagem">

        </a>

        <nav class="navegacao">
            <ul class="menu">
                <li class="item">
                    <a href="index.html">Home</a>
                </li>
                <li class="item">
                    <a href="#projetos">Projetos</a>
                </li>

                <li class="item">
                    <a href="#quem-somos">Quem Somos</a>
                </li>

                <li class="item">
                    <a href="formulario.php">Cadastro</a>
                </li>

                <li class="item">
                    <a href="contato.php">Contato</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- CONTEÚDO PRINCIPAL - formulario -->

    <section>
        <!--importante criar section -->

        <div class="box">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend><b>Fórmulário de Clientes</b></legend>

                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>

                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <p> <br>Sexo:</p>
                    <br>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>

    </section>

    <!-- RODAPÉ -->

    <footer class="rodape" id="Contato">
        <nav class="navegacao">
            <a href="index.html" class="logo">
                <img src="src/imagens/Logo ZN.jpeg" alt="Logo ZN" class="imagem">
            </a>

            <div class="redes-sociais">
                <a href="#" class="rede-social">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="#" class="rede-social">
                    <i class="fab fa-instagram-square"></i>
                </a>

                <a href="#" class="rede-social">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </nav>

        <p class="copyright">© 2022 Copyright: Todos os direitos reservados.</p>
    </footer>

    <script src="src/js/painel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>