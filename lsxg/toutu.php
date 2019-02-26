<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷zhuangxiabi.com"; 
$im = imagecreatetruecolor(801, 1068); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,801,1068); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 8, 28, 52); 
imagettftext($im, 40, 0, 420, 970, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>