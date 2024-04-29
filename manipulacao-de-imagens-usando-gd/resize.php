<?php

$arquivo = 'paisagem.jpg';

$maxWidth = 200;
$maxHeight = 200;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

//cria a imagem
$imagem = imagecreatetruecolor($finalWidth, $finalHeight);

//le o arquivo original
$originalImg = imagecreatefromjpeg($arquivo);

//copia a imagem
imagecopyresampled(
    $imagem, 
    $originalImg, 
    0, 0, 0, 0, 
    $finalWidth, 
    $finalHeight, 
    $originalWidth, 
    $originalHeight
);

//exibe a imagem
header("Content-Type: image/jpeg");
imagejpeg($imagem, null, 100);