<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷zhuangxiabi.com"; 
$im = imagecreatetruecolor(848, 1131); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,848,1131); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 35, 0, 558, 970, 
$blacka, $font, $name);
imagejpeg($im); 
imagedestroy($im); 
?>