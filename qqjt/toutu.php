<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(1920, 1080); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,1920,1080); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 250, 58, 57); 
$text = $name; 
$font = '../font/zgfyh.ttf'; 
$blacka = imagecolorallocate($im, 225, 242, 217); 

imagettftext($im, 28, 0, 280, 97, 
$black, $font, $name); 

imagettftext($im, 35, 0, 615, 380, 
$blacka, $font, $nameb); 

imagejpeg($im); 
imagedestroy($im); 
?>