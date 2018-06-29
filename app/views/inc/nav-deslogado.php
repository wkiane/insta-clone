<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
  <div class="container">
      <a class="navbar-brand" href="<?= BASE_URL ?>"><?= SITE_NAME ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="<?=BASE_URL;?>/fotos/nova-foto" class="nav-link">Adicionar Foto</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="<?= BASE_URL ?>/users/login" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL ?>/users/register" class="nav-link">Registrar</a>
            </li>
        </ul>
      </div>
  </div>
</nav>
