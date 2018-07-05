<div class="wMedium">
    <div class="container my-4">
        <h2 class="font-weight-normal mb-3">Criar uma conta</h2>
        <form method="POST" action="<?=BASE_URL?>/users/register">
            <div class="form-group">
                <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" placeholder="Seu nome" value="<?=$name?>">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>

            <div class="form-group">
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" placeholder="Seu email" value="<?=$email?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group">
                <input type="text" name="email2" class="form-control <?php echo (!empty($email2_err)) ? 'is-invalid' : ''; ?>" placeholder="Comfirme seu email" value="<?= $email2 ?>">
                <span class="invalid-feedback"><?php echo $email2_err; ?></span>
            </div>

            <div class="form-group">
                <input type="password" name="pass" class="form-control <?php echo (!empty($pass_err)) ? 'is-invalid' : ''; ?>" placeholder="Sua senha">
                <span class="invalid-feedback"><?php echo $pass_err; ?></span>
            </div>

            <div class="form-group">
                <input type="password" name="pass2" class="form-control <?php echo (!empty($pass2_err)) ? 'is-invalid' : ''; ?>" placeholder="Comfirme sua senha">
                <span class="invalid-feedback"><?php echo $pass2_err; ?></span>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" name="registrar" class="btn btn-lg btn-success btn-block" value="Registrar">
                </div>
                <div class="col">
                    <a href="<?=BASE_URL;?>/users/login" class="btn btn-lg btn-block btn-light">Entrar</a>
                </div>
            </div>
        </form>
    </div>
</div>