<?php include 'components/header.php' ?>
<main class="container-xxl bg-light p-0">

    <section id="times" class="container mb-5 p-0">

        <?php
        require_once 'classes/Database.php';

        $db = new \classes\Database();
        $jogadoresFutebol = $db->selecionarJogadores('time_futebol');
        $jogadoresVolei = $db->selecionarJogadores('time_volei');
        $jogadoresQueimada = $db->selecionarJogadores('time_queimada');
        ?>

        <h1 class="text-center mb-5">Atlética <span class="binaria-texto text-decoration-underline">BINÁRIA</span></h1>

        <h2 class="mb-5">TIME DE FUTEBOL</h2>
        <div id="carouselExampleControls" class="carousel slide">
            <div class="carousel-inner">
                <?php
                $jogadores = $jogadoresFutebol;
                $count = 0;
                foreach ($jogadores as $jogador) : ?>
                    <div class="carousel-item <?= $count == 0 ? 'active' : '' ?>">
                        <?php include 'components/card.php' ?>
                    </div>
                <?php
                    $count++;
                endforeach; ?>
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

    <section class="container mb-5 p-0">

        <h2 class="mb-5">TIME DE VÔLEI</h2>
        <div id="carrosselVolei" class="carousel slide">
            <div class="carousel-inner">
                <?php
                $jogadores = $jogadoresVolei;
                $count = 0;
                foreach ($jogadores as $jogador) : ?>
                    <div class="carousel-item <?= $count == 0 ? 'active' : '' ?>">
                        <?php include 'components/card.php' ?>
                    </div>
                <?php
                    $count++;
                endforeach; ?>
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

    <section class="container mb-5 p-0">

        <h2 class="mb-5">TIME DE QUEIMADA</h2>
        <div id="carrosselQueimada" class="carousel slide">
            <div class="carousel-inner">
                <?php
                $jogadores = $jogadoresQueimada;
                $count = 0;
                foreach ($jogadores as $jogador) : ?>
                    <div class="carousel-item <?= $count == 0 ? 'active' : '' ?>">
                        <?php include 'components/card.php' ?>
                    </div>
                <?php
                    $count++;
                endforeach; ?>
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

    <section id="galeria" class="container mb-5 p-0">
        <h2>Galeria</h2>
        <!-- Gallery -->
        <div class="row galeria-conteudo">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="storage/galeria/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Logo da Atlética" />

                <img src="storage/galeria/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Torcedores com camisas da Atlética" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="storage/galeria/3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Jogadores em campo" />

                <img src="storage/galeria/4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Jogadores reunidos em círculo" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="storage/galeria/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Jogadores em quadra" />

                <img src="storage/galeria/6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Jogadores em campo" />
            </div>
        </div>
        <!-- Gallery -->
    </section>


</main>
<?php include 'components/footer.php' ?>
</body>

</html>