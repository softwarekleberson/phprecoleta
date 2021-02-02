<?php
    require_once('connection.php');

    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    $query="UPDATE tbl_cadastro SET nome_usuario='$nome', email='$email', telefone='$telefone' WHERE id_usuario = $id_usuario";
    $atualizar = mysqli_query($conn, $query);
    if($atualizar){
        echo "<script>
                alert('Cadastro alterado');
                location.href='usuario.php';
            </script>";
    } else {
        echo "<script>
                location.href='usuario.php';
            </script>";
    }
