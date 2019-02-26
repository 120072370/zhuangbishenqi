<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(580, 433); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,580,433); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 89, 94, 87); 
imagettftext($im, 15, 0, 67, 76, 
$blacka, $font, $name); 
imagettftext($im, 15, 0, 440, 305, 
$blacka, $font, $nameb); 
imagejpeg($im); 
imagedestroy($im); 
?>