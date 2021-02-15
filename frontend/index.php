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
    <link rel="stylesheet" href="css/components/quemSomos.css">

    
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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/img/img13.jpeg" class="d-inlineblock w-100 img-carrosel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="bg-dark">Comunidade Hatsuta</h1>
        <h3 class="bg-dark">Antiga habitação nesta invasão.</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/img/img16.jpeg" class="d-block w-100 img-carrosel" alt="...">
      <div class="carousel-caption d-none d-md-block dark">
        <h1 class="bg-dark">Condomínio Residencial Lavras</h1>
        <h3 class="bg-dark">Antes da imersão do Recoleta.</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/img/condominio.PNG" class="d-block w-100 img-carrosel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="bg-dark">Condomínio Residencial Lavras</h1>
        <h3 class="bg-dark">O futuro dependerá daquilo que fazemos no presente. <br/> Recoleta apoia essa missão hoje.</h3>
      </div>
    </div>
  </div>
  <div class="container mt-4">
  <h5>
        Nosso projeto viu um problema no descarte de lixo nas comunidades que eram retiradas de favelas, onde viviam em em situação precária com esgoto a céu aberto, lixo, muitas ao lado de córregos, áreas de mananciais, morros sujeitos a deslizamentos. Além do perigo de incêndio.
        <br/> <br/> Essas comunidades foram realocadas para prédios do CDHU, porém sem uma "educação de como cuidar do ambiente onde se vive" o lindo condomínio se tornou uma favela na vertical. Onde o descarte de lixo e a falta de coletividade deixaram o lugar depreciado.
        <br/> <br/> Com isso o recoleta viu uma oportunidade de mudar essa história utilizando o Condomínio Lavras como projeto piloto, através da reeducação dos moradores, inicialmente com foco nas crianças, para a conscientização de que se separarem o lixo haverá melhoria na qualidade de vida deles, redução nos custos com limpeza, além da valorização de seus imóveis.
  </h5>
</div>

  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
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