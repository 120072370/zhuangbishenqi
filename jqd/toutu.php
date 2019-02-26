<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(720, 720); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,720,720); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 30, 2, 280, 550, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>