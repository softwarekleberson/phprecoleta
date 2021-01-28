<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/components/menu.css">
    <link rel="stylesheet" href="css/components/footer.css">
    <link rel="stylesheet" href="css/components/buttons.css">
    <link rel="stylesheet" href="css/components/carousel.css">
    <link rel="stylesheet" href="css/components/home.css">

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Elsie+Swash+Caps:wght@400;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Home | Recoleta</title>
</head>

<body>
    <header>
    <?php
    include('menu.html');
    ?>
    </header>

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/conceitos-de-ecologia.jpg" class="d-block w-100 img-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/iStock-841054602.jpg" class="d-block w-100 img-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/meio-ambiente-o-que-e-importancia-composicao-presxervacao-730x483.jpg"
                        class="d-block w-100 img-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Qual-a-relação-entre-segurança-do-trabalho-e-meio-ambiente.jpg"
                        class="d-block w-100 img-carrosel" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </main>

    <?php
    include('modal.html');
    ?>

    <?php
    include('footer.html');
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>