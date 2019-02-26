<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$im = imagecreatetruecolor(700, 550);
$bg = imagecreatefromjpeg('toutu10.jpg');
imagecopy($im,$bg,0,0,0,0,700,550);
imagedestroy($bg);
$black = imagecolorallocate($im, 220, 53, 47);
$t1 = "&#x5411;";
$t2 = "&#x540C;&#x5FD7;&#x770B;&#x9F50;&#xFF0C;&#x88C5;&#x8D77;&#x903C;&#x6765;&#x4E0D;&#x7559;&#x75D5;&#x8FF9;&#xFF01;";
$text = $name;
$font = '../font/ysggt.ttf';

imagettftext($im, 30, 0, 20, 490, $black, $font, $t1.$text.$t2);

imagejpeg($im);
imagedestroy($im);
?>