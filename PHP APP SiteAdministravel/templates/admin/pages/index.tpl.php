<h3 class="mb-5">Administração de Paginas</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['pages'] as $page): ?>
        <tr>
            <td><?php echo $page['idpages'] ?></td>
            <td><a href="/admin/pages/<?php echo $page['idpages'] ?>"><?php echo $page['title'] ?></a> </td>
            <td class="text-right">
                <a href="/admin/pages/<?php echo $page['idpages'] ?>" class="btn btn-primary btn-sm">Ver</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<a class="btn btn-secondary" href="/admin/pages/create">Novo</a>