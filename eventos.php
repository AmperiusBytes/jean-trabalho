<?php
include 'components/header.php' ?>
<main class="container-xxl bg-light p-0 mb-5">
    <section class="container" id="eventos">
        <h2>Eventos</h2>
        <?php
        require_once 'classes/Database.php';

        $db = new \classes\Database();
        $eventos = $db->selecionarEventos();

        foreach ($eventos as $evento) : ?>

            <?php
            echo '<div class="row m-auto justify-content-center">';
            include 'components/evento.php';
            echo '</div>';
            ?>

        <?php endforeach
        ?>
    </section>
</main>

<?php include 'components/footer.php' ?>    