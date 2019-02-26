<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(750, 990); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,750,990); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 20, 32, 28); 
imagettftext($im, 30, -12, 173, 810, 
$blacka, $font, $name); 
imagettftext($im, 30, -12, 106, 865, 
$blacka, $font, $nameb); 
imagejpeg($im); 
imagedestroy($im); 
?>