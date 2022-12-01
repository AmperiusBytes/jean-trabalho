<?php 
    
    include 'components/header.php';
    
    $diretores = [
        ['João Turcatti', 'Presidente', 'https://www.instagram.com/joaopedroturcatti/', 'storage/turcatti.jpg'],
        ['Eduardo Silva', 'Vice-presidente', 'https://www.instagram.com/dudscamps/', 'storage/eduardo.jpg'],
        ['Taynan Pereira', 'Secretário Geral', 'https://www.instagram.com/yrizer_taynan/', 'storage/taynan.jpg'],
        ['Lucas Sinhoreli', 'Diretor de Jogos', 'https://www.instagram.com/lucassinhoreli/', 'storage/lucas.jpg'],
        ['José Neto', 'Coordenador de Eventos', '#', 'storage/jose.jpg'],
        ['Vinícius de Stephano', 'Coordenador de Marketing', 'https://www.instagram.com/vinicius.stephano/', 'storage/vinicius.jpg']
    ];
    ?>

<main class="container-xxl">
    <section class="container-lg mt-5 mb-5" id="diretoria">
        <h2>Nossa Diretoria</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 m-auto gy-5 pb-5">
            <?php foreach($diretores as $diretor):?>
            <div class="col d-flex justify-content-center">
                <?php include 'components/profile.php'?>
            </div>
            <?php endforeach?>
        </div>
    </section>
</main>

<?php include 'components/footer.php'?>