<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(913, 1234); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,913,1234); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 96, 95, 82); 
$text = $name; 
$font = '../font/fzdh.ttf'; 
$blacka = imagecolorallocate($im, 137, 41, 43); 
imagettftext($im, 30, -1, 168, 838, $black, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>