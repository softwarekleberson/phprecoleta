<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/components/menu.css">
    <link rel="stylesheet" href="css/components/footer.css">
    <link rel="stylesheet" href="css/components/cards.css">
    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="stylesheet" href="css/components/jogos.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Jogos | Recoleta</title>
</head>

<body>
    <header>
    <?php
    include('menu.html');
    ?>
    </header>

    <div class="container my-4">
        <img src="assets/img/jogos.jpeg" alt="jogos" class="cover-play">
        <figcaption class="cards d-flex justify-content-around bg-light">
            <article class="card">
                <img class="card-img-top" src="assets/img/quiz.png">
                <div class="card-body">
                    <h5 class="card-title">Quiz</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been</p>
                    <a href="#" class="btn button-play">Jogar</a>
            </article>

            <article class="card">
                <img class="card-img-top" src="assets/img/jogo-da-memoria-753.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Jogo da Memória</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been</p>
                    <a href="#" class="btn button-play">Jogar</a>
                </div>
            </article>

            <article class="card">
                <img class="card-img-top" src="assets/img/atari.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Freeway</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been</p>
                    <a href="freeway.php" class="btn button-play">Jogar</a>
                </div>
            </article>
        </figcaption>
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