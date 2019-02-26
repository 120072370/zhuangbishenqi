<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(800, 533); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,800,533); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 36, 37, 32); 
imagettftext($im, 30, 0, 284, 407, 
$blacka, $font, $name); 
imagettftext($im, 30, 0, 197, 480, 
$blacka, $font, $nameb); 
imagejpeg($im); 
imagedestroy($im); 
?>