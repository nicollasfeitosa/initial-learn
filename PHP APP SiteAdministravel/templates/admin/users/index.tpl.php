<h3 class="mb-5">Administração de Usuários</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['users'] as $user): ?>
        <tr>
            <td> <?php echo $user['idusers']?> </td>
            <td> <?php echo $user['user']?>  </td>
            <td> <?php echo $user['email']?> </td>
            <td class="text-right">
                <a href="/admin/users/<?php echo $user['idusers']?>" class="btn btn-primary btn-sm">Ver</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<a href="/admin/users/create" class="btn btn-secondary">Novo</a>
