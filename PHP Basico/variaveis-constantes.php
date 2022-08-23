
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variaveis Constantes</title>
</head>
<body>
    <?php // Script PHP

    // Variaveis Constantes (Const) são aquelas
    // que não podem ser alteradas no meio do algoritimo

    // Boas praticas de var constantes: Letras maisculas

    //Definição de variaveis constantes com DEFINE
    //   NOME DA VAR   VALOR DA VAR
    define('BD_URL', 'endereco_bd_dev');
    define('BD_USER', 'usuario_dev');
    define('BD_PASS', 'senha_dev');

    // Chama as variaveis constantes
    echo BD_URL;
    echo BD_USER;
    echo BD_PASS;

    ?>
    

</body>
</html>