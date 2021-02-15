<?php
require_once('connection.php');
$id_usuario = $_POST["id_usuario"];

$query = "DELETE FROM tbl_cadastro WHERE id_usuario = $id_usuario";
$apagar = mysqli_query($conn, $query);
if ($apagar) {
    echo "<script>
					alert('Cadastro excluido com Sucesso!');
					location.href='../frontend/listausuarios.php';
				 </script>";
} else {
    echo "<script>
					alert('Ops! Deu ruim!');
					location.href='../frontend/listausuarios.php';
				 </script>";
}