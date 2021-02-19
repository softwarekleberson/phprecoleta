<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


  <link rel="stylesheet" href="css/components/login.css">
  <link rel="stylesheet" href="css/components/buttons.css">

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  
  <title>Login | Recoleta</title>
</head>

<body>
  <header>
    <?php
    include('menu.html');
    ?>
    <?php
    include('footer.html')
    ?>
  </header>
  <?php
  include('modal.html')
  ?>


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

  if (isset($_POST['email']) && isset($_POST['senha'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $sql = "SELECT email, senha FROM tbl_cadastro WHERE email='{$email}' AND senha=md5('{$senha}')";
    $retorno = mysqli_query($conn, $sql);
    $linhas = mysqli_num_rows($retorno);

    if ($linhas == 1) {
      $_SESSION['email'] = $email;
      header('Location:index.php');
      exit();
    } else {
      $_SESSION['nao_autenticado'] = true;
      echo "<script>alert('Usuário ou senha inválida!!');</script>";
      header('Location:index.php');
      exit();
    }
  }
  ?>

</body>

</html>