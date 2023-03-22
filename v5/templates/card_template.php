<div class="col-10 p-3 mx-auto">
    <div class="col d-flex flex-wrap justify-content-center gap-4">
            <?php foreach($cartas as $c): ?>
                <div class="card" style="width: 21rem;">
                    <img src="<?=$c->link?>" class="card-img-top" alt="...">
                    <div class="card-body bg-dark d-flex flex-column">
                        <h5 class="card-title"><?=$c->titulo?></h5>
                        <p class="card-text text-white">
                            <?=$c->paragrafo?>
                        </p>
                        <a href="review.php" class="btn btn-outline-warning mx-auto">Acesse a página</a>
                    </div>
                </div>
        <?php endforeach; ?>
    </div>
</div>


