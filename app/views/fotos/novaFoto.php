<div class="container">
    <fieldset class="my-5">
        <legend>Adicionar Foto</legend>
        <form action="<?= BASE_URL ?>/fotos/addFoto" method="POST" enctype="multipart/form-data">
            <label for="">Titulo:</label>
            <input class="form-control mb-3" type="text" name="titulo">
            <label for="">Foto:</label>
            <input class="form-control-file mb-4" type="file" name="arquivo" required>
            <input type="submit" class="btn btn-primary" name="enviar" value="Postar Foto">
        </form>
        <hr>
    </fieldset>
</div>