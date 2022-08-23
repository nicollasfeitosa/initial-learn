<h3 class="mb-5">Criação de Usuário</h3>

<dl class="row">

    <dt class="col-sm-3">User</dt>
    <dd class="col-sm-9"><?php echo $data['user']['user'] ?></dd>

    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9"><?php echo $data['user']['email'] ?></dd>

    <dt class="col-sm-3">Senha</dt>
    <dd class="col-sm-9">*********</dd>

    <dt class="col-sm-3">Criado Em</dt>
    <dd class="col-sm-9"><?php echo $data['user']['created'] ?></dd>

    <dt class="col-sm-3">Atualizado Em</dt>
    <dd class="col-sm-9"><?php echo $data['user']['updated'] ?></dd>
</dl>

<p>
    <a href="/admin/users/<?php echo $data['user']['idusers'] ?>/edit" class="btn btn-primary">Editar</a>
    <a href="/admin/users/<?php echo $data['user']['idusers'] ?>/delete" class="btn btn-danger confirm">Remover</a>
</p>

<a href="/admin/users" class="btn btn-secondary">Voltar</a>
