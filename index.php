<?php include 'components/header.php' ?>
    <main class="container-xxl mt-5 bg-light">

        <section class="container mb-5">

        <?php
            require_once 'classes/Database.php';

            $db = new \classes\Database();
            $jogadoresFutebol = $db->selecionarTime('time_futebol');
            print_r($jogadoresFutebol);
        ?>

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