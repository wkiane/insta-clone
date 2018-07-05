<div class="wMedium">
    <div class="container my-4">
        <?php flash('register_success'); ?>
        <h2 class="font-weight-normal mb-3">Entrar em sua conta</h2>
        <form action="<?=BASE_URL?>/users/login" method="POST">
            <div class="form-group">
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" placeholder="Seu email" value="<?=$email?>">
                <span class=invalid-feedback><?=$email_err;?></span>
            </div>

            <div class="form-group">
                <input type="password" name="pass" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" placeholder="Sua senha">
                <span class="invalid-feedback"><?=$pass_err?></span>
            </div>

            <div class="row">
                <div class="col">
                    <input type="submit" name="entrar" class="btn btn-lg btn-success btn-block" value="Entrar">
                </div>
                <div class="col">
                    <a href="<?=BASE_URL?>/users/register" class="btn btn-lg btn-block btn-light">Criar conta</a>
                </div>
            </div>
        </form>
    </div>
</div>