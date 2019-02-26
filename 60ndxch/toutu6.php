<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu6.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x6211;&#x8981;&#x628A;";
$t2 = "&#x4F60;&#x522B;&#x8FC7;&#x6765;&#xFF0C;&#x6211;&#x4EEC;&#x4E0D;&#x7EA6;&#xFF01;&#x4E0D;&#x7EA6;&#xFF01;";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 33, 0, 18, 490, $black, $font, $text.$t2);

imagejpeg($im);
imagedestroy($im);
?>