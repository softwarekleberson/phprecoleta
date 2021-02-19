<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="css/components/menu.css">
    <link rel="stylesheet" href="css/components/footer.css">
    <link rel="stylesheet" href="css/components/cards.css">
    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="stylesheet" href="css/components/dicas.css">
    <link rel="stylesheet" href="css/components/jogos.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Jogos | Recoleta</title>
</head>

<body>
    <header>
        <?php
        include('menu.html');
        ?>
    </header>

    <div class="container">
        <h2>
            Jogos
        </h2>
        <p>Aqui você contrará jogos, para se divertir e aprender como descartar seus resíduos</p>
        <figcaption class="cards d-flex justify-content-around bg-light">

            <article class="card">
                <img class="card-img-top" src="assets/img/quiz1.png">
                <div class="card-body">
                    <h5 class="card-title">Quiz</h5>
                    <p class="card-text">
                        Entenda e se pergunte, como está seu dia a dia hoje, e veja em dicas ações que possa impactar a você e todos a sua volta!</p>
                    <a href="./quiz/screens/quiz.html" class="btn button-play">Jogar</a>
            </article>

            <article class="card">
                <img class="card-img-top" src="assets/img/memory.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Jogo da Memória</h5>
                    <p class="card-text">Lembre-se que pequenas ações, trazem grandes resultados!
                        Espalhe estás ações com sua família e amigos.</p>
                    <a href="memory.php" class="btn button-play">Jogar</a>
                </div>
            </article>

            <article class="card">
                <img class="card-img-top" src="assets/img/freeway.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Freeway</h5>
                    <p class="card-text">Faça uma travessia segura, e recolha o máximo de resíduos descartados pelo chão, e transforme o mundo hoje.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>