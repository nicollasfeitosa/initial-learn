<?php

// Nullable types

function sum(?int $x = null) : ?int { // pode retornar int ou valor null
    return $x;
}

echo sum();