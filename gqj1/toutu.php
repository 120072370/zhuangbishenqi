<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(640, 672); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,640,672); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 40, 0, 460, 605, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>