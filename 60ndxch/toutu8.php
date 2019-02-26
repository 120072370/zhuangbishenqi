<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu8.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x6211;&#x8981;&#x628A;";
$t2 = "&#x6211;&#x529D;&#x4F60;&#x4E0D;&#x8981;&#x592A;&#x53FC;&#xFF0C;&#x5C0F;&#x5FC3;&#x6211;&#x4E00;&#x67AA;&#x5D29;&#x4E86;&#x4F60;&#xFF01;";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 26, 0, 15, 490, $black, $font, $text.$t2);

imagejpeg($im);
imagedestroy($im);
?>