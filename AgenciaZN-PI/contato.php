<?php

$mensagem = "Preencha os dados do formulário";
$mensagem_class = "";
$nome = "";
$email = "";
$msg = "";

if (isset($_POST["nome"], $_POST["email"], $_POST["msg"])) {
    $conexao = new PDO("mysql:host=localhost;dbname=contato-zn", "root", "");

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_STRING);

    if (!$nome || !$email || !$msg) {
        $mensagem = "Dados Inválidos";
        $mensagem_class = "erro";
    } else {
        $stm = $conexao->prepare('INSERT INTO contato (nome,email,msg) VALUES (:nome,:email,:msg)');
        $stm->bindParam('nome', $nome);
        $stm->bindParam('email', $email);
        $stm->bindParam('msg', $msg);
        $stm->execute();

        $mensagem = "Mensagem enviada com sucesso!";
        $mensagem_class = "sucesso";
    }
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

    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/estilos.css">

    <title>Contato</title>




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






    <!-- CONTEÚDO PRINCIPAL - Contato -->

    <!--importante criar section -->



    <section class="container">

        <main>

            <form method="POST">

                <label>Nome</label>
                <input type="text" name="nome" value="<?= $nome ?>" required />

                <label>Email</label>
                <input type="text" name="email" value="<?= $email ?>" required />

                <label>Mensagem</label>
                <textarea name="msg"><?=$msg?></textarea>

                <button type="submit">Enviar</buttom>

            </form>

           

        </main>

    </section>

    <div class="mensagem <?= $mensagem_class ?>">

        <?=$mensagem?>

    </div>


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