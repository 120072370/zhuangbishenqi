<?php

header("content-type:image/jpeg");

$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$namea = $_GET['namea'];

$im = imagecreatetruecolor(500, 704);

$bg = imagecreatefromjpeg('toutu.jpg');

imagecopy($im,$bg,0,0,0,0,500,704);

imagedestroy($bg);

$black = imagecolorallocate($im, 64, 52, 38);

$text = $name;

$font = '../font/fzljd.ttf';

//$ida = number_format($id);

//imagettftext($im, 30, 0, 628, 363, $black, $font, $ida);

$blacka = imagecolorallocate($im, 64, 52, 38);

//$showtime=date("m/d");

//imagettftext($im, 30, 5.5, 271, 200, $blacka, $font, $showtime);


imagettftext($im, 30, 0, 354, 646, $blacka, $font, $name);
imagettftext($im, 35, 0, 44, 108, $blacka, $font, $namea);



imagejpeg($im);

imagedestroy($im);

?>