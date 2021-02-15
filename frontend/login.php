<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/components/footer.css">
    <link rel="stylesheet" href="css/components/menu.css">
    <link rel="stylesheet" href="css/components/login.css">
    <link rel="stylesheet" href="css/components/buttons.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Login | Recoleta</title>
</head>

<body>
    <header>
    <?php
    include('menu.html');
    include('modal.html');
    ?>
    </header>

   
       <div class="container-box">
        <form class="container box">
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn cancel">Entrar</button>
          </form>
       </div>
   
       <?php
        session_start();
        include('../backend/connection.php');
        
            if(isset($_POST['email']) && isset($_POST['senha'])) {

              $email= mysqli_real_escape_string($conn, $_POST['email']);
              $senha = mysqli_real_escape_string($conn, $_POST['senha']);

              $sql = "SELECT email, senha FROM tbl_cadastro WHERE email='{$email}' AND senha=md5('{$senha}')";
              $retorno = mysqli_query($conn, $sql);
              $linhas = mysqli_num_rows($retorno);

                if($linhas == 1){
                  $_SESSION['email'] = $email;
                  header('Location:index.php');
                  exit();
                } else {
                  $_SESSION['nao_autenticado'] = true;
                  echo"<script>alert('Usuário ou senha inválida!!');</script>";  
                  header('Location:index.php');        
                  exit();
                }
            } 
      ?>

    <?php
    include('footer.html');
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>