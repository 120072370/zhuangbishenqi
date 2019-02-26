<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(1242, 1242); 
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,1242,1242); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 0, 0, 0); 
$text = $nameb;
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 45, -5, 460, 650, $black, $font, $name); 
imagettftext($im, 45, -5, 430, 730, $black, $font, $nameb);
imagejpeg($im); 
imagedestroy($im); 
?>