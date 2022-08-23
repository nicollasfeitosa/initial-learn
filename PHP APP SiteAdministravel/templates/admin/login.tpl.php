<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/trix/trix.css">
    <link rel="stylesheet" href="/node_modules/@pnotify/core/dist/PNotify.css">
    <link rel="stylesheet" href="/node_modules/@pnotify/core/dist/BrightTheme.css">
    <script src="https://kit.fontawesome.com/53cf11aee4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1598962111019-25086064361a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=676&q=80');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .card { 
            background-color: rgba(245, 245, 245, 0.5);
        }

        .card-header, .card-footer { 
            opacity: 1;
        }

    </style>

    <title>Painel Administrativo</title>
  </head>
  <body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar navbar-dark bg-dark">
            <span>
                <a href="/admin" class="navbar-brand">AdminSite</a>
                <span class="navbar-text">
                    Painel Administrativo
                </span>
            </span>    
        </nav>
    </div>

    <div id="main">
        <div class="row justify-content-center">
            <div id="content" class="col-6 align-self-center">
                <?php require_once $content ?>
            </div>
        </div>
    </div>
    

    <!-- JavaScript PNotify -->
    <script src="/node_modules/@pnotify/core/dist/PNotify.js"></script>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        <?php flash(); ?>
    </script>

  </body>
</html>