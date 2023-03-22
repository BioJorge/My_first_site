<div class="container-fluid p-3">
    <div class="row d-none d-md-flex justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6">
            <div id="carouselExampleCaptions" class="carousel slide rounded-4">
                <div class="carousel-indicators">
                    <?php foreach($lista_carousel as $chave => $l): ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$chave?>" <?= ($chave == 0) ? 'class="active" aria-current="true" aria-label="Slide 1"' : 'aria-label="Slide   ($chave+1)"'?>>
                        </button>
                    <?php endforeach; ?>
                </div>

                <div class="carousel-inner rounded-4">
                    <?php foreach($lista_carousel as $chave => $l): ?>
                        <!--item individual do carousel-->
                        <div class="carousel-item <?= ($chave == 0) ? "active" : ""; ?>">
                            <img src="<?= $l->link?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block rounded-4">
                                <h5><?= $l->titulo?></h5>
                                <p><?= $l->subtitulo?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>