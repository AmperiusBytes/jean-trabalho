<!DOCTYPE html>
<html lang="pt-br" class="bg-light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Atlética Binária</title>
</head>

<body class="bg-light">
    <header class="container-xxl p-0">
        <div class="w-100 position-relative">
            <img class="banner-imagem" src="img/banner3.jpg" alt="Banner com imagem do time da Atlética Binária">
            <a href="index.php">
                <picture>
                    <source srcset="img/logo.jpg" media="(min-width: 960px)">
                    <img class="logo-image position-absolute top-100 start-50 translate-middle" src="img/logo-menor.jpg" alt="Logo da Atlética">
                </picture>
            </a>
        </div>
        <div class="container-xxl bg-black banner-faixa p-0 position-relative faixa">
        </div>
        <div class="container-xxl p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-black">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <div class="">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Times</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lojas</a>
                                </li>
                            </div>
                            <div class="">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Eventos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Galeria</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="container-xxl mt-5 bg-light">

        <section class="container mb-5">

            <h2 class="text-center mb-3">TIME DE FUTEBOL</h2>
            <div id="carouselExampleControls" class="carousel slide bg-dark">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php include 'components/card.php'?>
                    </div>
                    <div class="carousel-item">
                        <?php include 'components/card.php'?>
                    </div>
                    <div class="carousel-item">
                        <?php include 'components/card.php'?>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

        <section class="container mb-5">

            <h2 class="text-center mb-3">TIME DE VÔLEI</h2>
            <div id="carrosselVolei" class="carousel slide bg-dark">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php include 'components/card.php'?>
                    </div>
                    <div class="carousel-item">
                        <?php include 'components/card.php'?>
                    </div>
                    <div class="carousel-item">
                        <?php include 'components/card.php'?>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carrosselVolei" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carrosselVolei" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

        <section class="container mb-5">

            <h2 class="text-center mb-3">TIME DE QUEIMADA</h2>
            <div id="carrosselQueimada" class="carousel slide bg-dark">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php include 'components/card.php'?>
                    </div>
                    <div class="carousel-item">
                        <?php include 'components/card.php'?>
                    </div>
                    <div class="carousel-item">
                        <?php include 'components/card.php'?>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carrosselQueimada" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carrosselQueimada" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

    </main>
</body>

</html>