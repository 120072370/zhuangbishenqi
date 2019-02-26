<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu5.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x524D;&#x65B9;&#x597D;&#x50CF;&#x6709;&#x4EBA;&#x5728;&#x88C5;&#x903C;&#xFF0C;&#x539F;&#x6765;&#x662F;";
$t2 = "&#x5440;&#xFF01;";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 30, 0, 18, 490, $black, $font, $t1.$text.$t2);

imagejpeg($im);
imagedestroy($im);
?>