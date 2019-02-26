<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu3.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x653E;&#x5F00;";
$t2 = "!&#x8BA9;&#x6211;&#x6765;!";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 45, 0, 80, 490, $black, $font, $t1.$text.$t2);

imagejpeg($im);
imagedestroy($im);
?>