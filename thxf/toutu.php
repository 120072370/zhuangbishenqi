<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(560, 560); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,560,560); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 36, 37, 32); 
imagettftext($im, 25, 0, 160, 230, 
$blacka, $font, $name); 
imagettftext($im, 25, 0, 177, 280, 
$blacka, $font, $nameb); 
imagejpeg($im); 
imagedestroy($im); 
?>