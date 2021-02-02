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
    <title>Editar Usuarios</title>
</head>
<body>
    <?php
    include('menu.html');
    include('modal.php');
    require('connection.php');
    ?>

    <div class="container">

    <h1>Editar Cadastros</h1>
    <table>
        <tr>
            <td>Nome</td>
            <td>e-mail</td>
            <td>telefone</td>
            <td>senha</td>
        </tr>

        <?php
        $query = "SELECT * FROM tbl_cadastro ORDER BY nome_usuario ASC";
        $executar = mysqli_query($conn, $query);
        while ($dados = mysqli_fetch_array($executar)) {
        ?>
            <tr>
                <form action="editar.php" method="post">
                    <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'] ?>">

                    <td>
                        <input type="text" name="nome" value="<?php echo $dados['nome_usuario'] ?>">
                    </td>

                    <td>
                        <input type="text" name="email" value="<?php echo $dados['email'] ?>">
                    </td>

                    <td>
                        <input type="tel" name="telefone" value="<?php echo $dados['telefone'] ?>">
                    </td>

                    <td>
                        <input type="submit" value="Editar">
                    </td>

                </form>
                <td>
                    <form action="excluir.php" method="post">
                        <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'] ?>">
                        <input type="submit" value="Excluir">
                    </form>
                </td>

            </tr>

        <?php
        }
        ?>

    </table>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    </div>
    
    <?php
    include('footer.html');
    ?>

</body>
</html>