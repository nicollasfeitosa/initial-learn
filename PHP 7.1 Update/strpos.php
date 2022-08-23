<?php 

// Strings com offset negativo

error_reporting(-1);

$result = substr("abcdefg", -2, 1);
$x = "abcdef abcdegf";

$result = strpos($x, "c", -8);

echo $result;