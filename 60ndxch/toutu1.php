<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu1.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x6211;&#x8981;&#x628A;";
$t2 = "&#x8FD9;&#x5934;&#x732A;&#x517B;&#x5F97;&#x53C8;&#x80A5;&#x53C8;&#x5927;&#xFF01;";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 35, 0, 18, 490, $black, $font, $t1.$text.$t2);

imagejpeg($im);
imagedestroy($im);
?>