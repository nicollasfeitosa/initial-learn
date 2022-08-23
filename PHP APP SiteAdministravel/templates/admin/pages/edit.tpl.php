<h3 class="mb-5">Edição de Pagina</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Titulo</label>
        <input name="title" id="pagesTitle" type="text" class="form-control" placeholder="Titulo da Página" value="<?php echo $data['pages']['title']?>" required>
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL amigável, deixe em branco para informar a página inicial" value="<?php echo $data['pages']['url']?>">
        </div>
    </div>

    <div class="form-group">
        <input id="pagesBody" type="hidden" name="body" value="<?php echo htmlentities($data['pages']['body'])?>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr/>

<a class="btn btn-secondary" href="/admin/pages/<?php echo $data['pages']['idpages'] ?>">Voltar</a>