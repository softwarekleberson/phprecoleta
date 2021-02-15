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
    <link rel="stylesheet" href="css/components/quemSomos.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Quem Somos | Recoleta</title>
</head>

<body>
    <header>
        <?php
        include('menu.html');
        ?>
    </header>

    <div class="container mt-4">
        <img src="assets/img/recoleta.jpeg" alt="jogos" width="600">

        <section class="titulo">Mas o que é a Recoleta?</section>
        <article>
            Criado em Novembro de 2020. O Recoleta é uma organização sem fins lucrativos, que trabalha pela conscientização da sociedade, orientando como realizar o descarte e consumo consciente de residuos.
        </article>

        <section class="subtitle">Nossa missão.</section>
        <article>
            Temos como missão promover a mudança de comportamento, atuando na educação e orientação das crianças para construção de um mundo melhor, com mais qualidade de vida.
        </article>

        <section class="subtitle">Nossas Atividades<section>

                <article>
                    Pensando no bem estar, e futuro das nossas crianças, trazemos dicas, dados e jogos para que os nossos pequenos cresçam pensando de forma sustentável.

                    Atuamos em duas frentes: Educação e orientação.

                    Agregando valor ao conhecimento básico de informação, com intuito de despertar nas crianças o senso de responsabilidade, com suas ações e com isso gerar adultos mais responsáveis e preocupados em tomar atidudes corretas em relação ao resíduo gerado.

                    Inicalmente conduziremos nossa aplicação no condomínio em Bonsucesso.

                
                </article>
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