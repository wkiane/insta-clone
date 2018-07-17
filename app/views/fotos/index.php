<div class="home">
    <div class="container mt-5">
        
            <?php foreach ($fotos as $foto) : ?>
                    <figure>
                        <a href="<?= BASE_URL ?><?= $foto->foto_id ?>">
                            <img class="img-size img-fluid figure-img" src="<?= BASE_URL; ?>/public/img/pics/<?= $foto->url; ?>" alt="foto">
                            <h2><?= $foto->titulo; ?></h2>
                        </a>
                        <figcaption class="figure-catpion">
                            <a href="profile/profile/<?= $foto->user_id ?>" class="text-capitalize text-secondary bigger">By <?= $foto->nome; ?></a> -
                            <span><?= $foto->created_at; ?></span>
                        </figcaption>
                    </figure>
            <?php endforeach; ?>
    </div>
</div>