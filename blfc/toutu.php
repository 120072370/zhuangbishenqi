<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(744, 992); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,744,992); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 20, 20, 20); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 137, 41, 43); 
imagettftext($im, 30, 3, 230, 915, $black, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>