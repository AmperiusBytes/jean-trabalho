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

</main>
<?php include 'components/footer.php' ?>
</body>

</html>