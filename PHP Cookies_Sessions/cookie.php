<?php

//Armazena o Cookie

setcookie('meunome', 'nicollas', time() + 3600 );
//         Nome      Valor     Data Atual + Tempo Expiração

//Atualizar o valor
setcookie('meunome', 'nicollas feitosa', time() + 3600 );

//Para remover o cookie
setcookie('meunome', 'nicollas feitosa', time() - 1 );



//Como ler Cookies 
var_dump($_COOKIE);

var_dump($_COOKIE["meunome"]);



?>