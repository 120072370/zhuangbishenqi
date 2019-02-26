<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu4.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x5FEB;&#x770B;&#xFF01;";
$t2 = "&#x8981;&#x4E0A;&#x5929;&#x4E86;&#xFF01;";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 40, 0, 100, 490, $black, $font, $t1.$text.$t2);

imagejpeg($im);
imagedestroy($im);
?>