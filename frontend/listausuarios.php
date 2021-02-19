<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <link rel="stylesheet" href="css/components/cadastro.css">
    <link rel="stylesheet" href="css/components/buttons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Editar Usuarios</title>
</head>

<body>
    <?php
    include('modal.php');
    ?>
    <?php
    include('footer.html');
    ?>
    <?php
    include('menu.html');
    require('../backend/connection.php');
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
                    <form action="../backend/update.php" method="post">
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
                        <form action="../backend/delete.php" method="post">
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

</body>

</html>