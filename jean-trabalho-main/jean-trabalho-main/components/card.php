<div class="player-card text-light">
    <div class="card-content">
        <img src="<?=$jogador['caminho_foto']?>" alt="" class="card-image">
        <div class="card-info">
            <div>
                <h3 class="mb-3"><?=$jogador['nome']?></h3>
                <div class="player-info">
                    <p>Altura: <?=$jogador['altura']?>m</p>
                    <p>Idade: <?=$jogador['idade']?> anos</p>
                </div>
                <p class='camisa text-center'><?=$jogador['camisa']?></p>
            </div>
        </div>
    </div>
</div>