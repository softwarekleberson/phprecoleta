<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/components/menu.css">
    <link rel="stylesheet" href="css/components/footer.css">
    <link rel="stylesheet" href="css/components/cadastro.css">
    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Cadastro | Recoleta</title>
</head>

<body>
    <header>

    <?php
    include('menu.html');
    require('connection.php');
    include('modal.php');
    ?>

    </header>

    <div class="container my-4">
        <form method="post" class="container">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" name="telefone" class="form-control" id="telefone" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn button-send">Enviar</button>
            </div>

    <?php

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['senha'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        $checkrepeticao = "SELECT email from tbl_cadastro WHERE email='$email'";
        $emails = mysqli_query($conn, $checkrepeticao);
        $repetido = mysqli_num_rows($emails);

        if ($repetido == 1) {
            echo "<script>alert('email ja cadastrado!'); location.href='cadastro.php';</script>";
        } else {
            $sql = "INSERT INTO tbl_cadastro (nome_usuario, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', md5('$senha'))";
            $result = $conn->query($sql);

            if ($result) {
                echo "<script>alert('Dados inseridos com sucesso');</script>";
                header("Location:login.php");
            } else {
                echo "<script>alert('ERRO!! Dados não inseridos na tabela!!');</script>";
                exit();
            } 
        }               
    } 
    ?>   

        </form>
    </div>

    <br><br><br>
    <?php
    require('footer.html');
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>