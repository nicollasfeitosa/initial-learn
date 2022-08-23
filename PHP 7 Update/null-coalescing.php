<?php

// Operador Null Coalescing

//$a = isset($_GET['a']) ? $_GET['a'] : "Null" ; // Nas versoes antigas do PHP

$a = $_GET['a'] ?? "Null";

echo $a;