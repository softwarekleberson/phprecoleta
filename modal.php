<?php

?>
<div class="modal fade" id="modal-contato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fale Conosco</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="#">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="email@email.com">
                        <div id="emailHelp" class="form-text">Nós nunca compartilharemos seus dados com ninguem
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx">
                    </div>
                    <div class="form-floating">
                        <label>Mensagem</label>
                        <textarea class="form-control" placeholder="Leave a comment here" name="mensagem" id="mensagem"
                            style="height: 100px"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn button-send">Enviar</button>
            </div>
        </div>
    </div>
    <?php

    require('connection.php');

    if (isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem'])) {

        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
        
        $inserting = "INSERT INTO contato (email, telefone, mensagem) VALUES ('$email', '$telefone', '$mensagem')";
        $resultado = $conn->query($inserting);

        if ($resultado) {
            echo "<script>
                    alert('Mensagem enviada!);
                    location.href='index.php';
                </script>";

            exit();
        } else {
            echo "<script>
            alert('ERRO!! Mensagem não enviada!');
            location.href='modal.php';
            </script>";
            exit();
        }
    }
    ?>
</div>
