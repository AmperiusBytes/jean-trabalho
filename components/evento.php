<?php 

setlocale(LC_TIME, 'pt_BR.UTF-8');

$date = date_create($evento['data']);
$dataCompleta = date_format($date, 'l\, F dS');

$horarioInicio = DateTime::createFromFormat('H:i:s', $evento['horario_inicio']);
$horarioFim = DateTime::createFromFormat('H:i:s', $evento['horario_fim']);


?>

<article class="card fl-left">
    <section class="date">
        <time>
            <span><?=$date->format('d')?></span><span><?=$date->format('M')?></span>
        </time>
    </section>
    <section class="card-cont">
        <h3><?=$evento['titulo']?></h3>
        <div class="even-date">
            <i class="fa fa-calendar"></i>
            <time>
                <span><?=$dataCompleta?></span>
                <span><?=$horarioInicio->format('H:i\h') . ' às ' . $horarioFim->format('H:i\h')?></span>
            </time>
        </div>
        <div class="even-info">
            <i class="fa fa-map-marker"></i>
            <p>
                <?=$evento['localizacao']?>
            </p>
        </div>
        <a href="<?='evento.php?id='.$evento['id_evento']?>">ver mais</a>
    </section>
</article>