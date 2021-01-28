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
    ?>
    </header>

    <div class="container my-4">
       <div class="box">
        <form class="container">
            <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form>
       </div>
    </div>

    <?php
    include('modal.html');
    ?>

    <?php
    include('footer.html');
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>