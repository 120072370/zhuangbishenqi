<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu9.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x8BBA;&#x88C5;&#x903C;&#x5B9E;&#x529B;&#xFF0C;&#x6211;&#x53EA;&#x670D;";
$t2 = "&#xFF01;";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 40, 0, 30, 490, $black, $font, $t1.$text.$t2);

imagejpeg($im);
imagedestroy($im);
?>