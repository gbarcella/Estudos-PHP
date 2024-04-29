<?php

//cria a imagem
$imagem = imagecreatetruecolor(300, 300);

//atribui uma cor a imagem
$cor = imagecolorallocate($imagem, 255, 0, 0);

//preenche a imagem
imagefill($imagem, 0, 0, $cor);

//muda o content da página pra virar uma imagem
header("Content-Type: image/jpeg");

//exibe a imagem
imagejpeg($imagem, null, 100);

//cria uma imagem
imagejpeg($imagem, 'nova_imagem.jpg', 100);