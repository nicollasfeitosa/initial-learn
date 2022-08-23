<?php
// Gerador de Captcha
// Necessita a extensão GD

session_start();

header('Content-Type: image/jpeg');

$image = imagecreate(200, 100);  // Largura, Altura
$palavra = '';

// Gera um array de A até Z minusculo e maisculo
//$caracteres = array_merge(range('a', 'z'), range('A', 'Z'));

$caracteres = range('a', 'z');

shuffle($caracteres); // Mistura a Ordem

$palavra = implode($caracteres); // Junta elementos de um array em uma string
$palavra = substr($palavra, 0, 5); // Corta em 5 Letras

$_SESSION['captcha'] = $palavra;

imagecolorallocate($image, 0, 0, 0);

$cor = imagecolorallocate($image, 255, 255, 255);

$font = dirname(__FILE__) . '/font.ttf';

imagettftext($image, 30, rand(-5, 5), rand(20, 50), rand(40, 70), $cor, $font, $palavra);


imagejpeg($image);
imagedestroy($image);