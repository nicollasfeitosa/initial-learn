<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/node_modules/@pnotify/core/dist/PNotify.css">
    <link rel="stylesheet" href="/node_modules/@pnotify/core/dist/BrightTheme.css">
    <link rel="stylesheet" href="/site.css">
</head>
<body>
    <header id="header">
        <h1>Bem vindo ao Site</h1>
    </header>

    <ul id="nav">
        <?php foreach ($data['pages'] as $item): ?>
            <li><a href="/<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
        <?php endforeach; ?>
            <li><a href="/contato">Contato</a></li>
    </ul>

    <main id="content">
        <?php require_once $content ?>
    </main>

    <p id="footer"><small><?php echo date('Y'); ?> - Todos os direitos reservados</small></p>

    <!-- JavaScript PNotify -->
    <script src="/node_modules/@pnotify/core/dist/PNotify.js"></script>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script>
        <?php flash(); ?>
    </script>
</body>
</html>
