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
    <link rel="stylesheet" href="css/components/dicas.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Dicas | Recoleta</title>
</head>

<body>
    <header>
        <?php
        include('menu.html');
        ?>
    </header>

    <div class="container">
        <h2>
            Dicas
        </h2>
        <p>Aqui você encontrará dicas de como colaborar com o meio ambiente</p>
        <figcaption class="cards d-flex justify-content-around bg-light">

            <article class="card">
                <img class="card-img-top" src="assets/img/residuo.jpg">
                <div class="card-body">
                    <h5 class="card-title">Resíduos</h5>
                    <p class="card-text">
                        Encontre maneiras de descartar seus resíduos de maneira consciente</p>
                    <a href="./quiz/screens/quiz.html" class="btn button-play">Acessar</a>
            </article>

            <article class="card">
                <img class="card-img-top" src="assets/img/coleta.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Coleta Seletiva</h5>
                    <p class="card-text">Encontre pontos de coleta seletiva proximos a sua residencia.</p>
                    <a href="./memoria/memory.html" class="btn button-play">Acessar</a>
                </div>
            </article>

            <article class="card">
                <img class="card-img-top" src="assets/img/agua.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Economia de Agua</h5>
                    <p class="card-text">Escovar os dentes mantendo a torneira fechada ajuda economizar até 85% de água</p>
                    <a href="freeway.php" class="btn button-play">Acessar</a>
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