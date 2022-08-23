<h3 class="mb-5">Detalhes de Pagina</h3>

<div class="row">
    <div class="col-3">
        <dl class="row">
            <dt class="col-sm-4">Titulo</dt>
            <dd class="col-sm-8"><?php echo $data['pages']['title'] ?></dd>

            <dt class="col-sm-4">URL</dt>
            <dd class="col-sm-8">/<?php echo $data['pages']['url'] ?> - <a href="/<?php echo $data['pages']['url'] ?>" target="blank">Abrir</a></dd>

            <dt class="col-sm-4">Criado em</dt>
            <dd class="col-sm-8"><?php echo $data['pages']['created'] ?></dd>

            <dt class="col-sm-4">Atualizado em</dt>
            <dd class="col-sm-8"><?php echo $data['pages']['updated'] ?></dd>
        </dl>
    </div>
    <div class="col bg-light">
        <?php echo $data['pages']['body'] ?>
    </div>
</div>

<p>
    <a href="/admin/pages/<?php echo $data['pages']['idpages'] ?>/edit" class="btn btn-primary">Editar</a>
    <a href="/admin/pages/<?php echo $data['pages']['idpages'] ?>/delete" class="btn btn-danger confirm">Remover</a>
</p>

<a class="btn btn-secondary" href="/admin/pages">Voltar</a>