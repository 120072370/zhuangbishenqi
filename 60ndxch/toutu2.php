<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu2.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x6211;&#x8981;&#x628A;";
$t2 = "&#x4F60;&#x518D;&#x88C5;&#x903C;&#xFF0C;&#x6211;&#x5C31;&#x62FF;&#x67AA;&#x6253;&#x4F60;&#x4E86;&#xFF01;";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 35, 0, 10, 490, $black, $font, $text.$t2);

imagejpeg($im);
imagedestroy($im);
?>