<h3 class="mb-5">Criação de Usuário</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="usersName">Username</label>
        <input name="user" id="usersName" type="text" class="form-control" placeholder="@Username">
    </div>

    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input name="email" id="usersEmail" type="text" class="form-control" placeholder="seuemail@seudominio.com">
    </div>

    <div class="form-group">
        <label for="usersPassword">Senha</label>
        <input name="password" id="usersPassword" type="password" class="form-control" placeholder="Sua senha">
    </div>

    <button class="btn btn-primary" type="submit">Salvar</button>
</form>

<hr>

<a href="/admin/users" class="btn btn-secondary">Voltar</a>
