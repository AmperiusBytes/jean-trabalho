<?php

require_once 'classes/Database.php';

$id = isset($_GET['id']) ? $_GET['id'] : false;

if(!$id) {
    header('location: index.php');
    exit;
}

$db = new \classes\Database();
$evento = $db->selecionarEvento($id);

if(!count($evento)) {
    header('location: index.php');
    exit;
}


include 'components/header.php';

$date = date_create($evento['data']);

$horarioInicio = DateTime::createFromFormat('H:i:s', $evento['horario_inicio']);
$horarioFim = DateTime::createFromFormat('H:i:s', $evento['horario_fim']);

?>

<main class="container-xxl bg-light p-0 mb-5">
    <section class="container" id="evento-info">
        <h2>EVENTO: <?=$evento['titulo']?></h2>
        <p><i class="bi bi-clock"> <?=$horarioInicio->format('H:i\h') . ' - ' . $horarioFim->format('H:i\h')?></i>
        <p><i class="bi bi-calendar"> <?=$date->format('d/m/Y')?></i></p>
        <p><i class="bi bi-geo-alt-fill"> <?=$evento['localizacao']?></i></p>
        <p class="evento-descricao"><?=$evento['descricao']?></p>
    </section>
</main>

<?php include 'components/footer.php' ?>