<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(640, 1136); 
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,640,1136); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 0, 0, 0); 
$text = $nameb;
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 20, 0, 370, 810, $black, $font, $name); 
imagettftext($im, 20, 0, 480, 880, $black, $font, $nameb);
imagejpeg($im); 
imagedestroy($im); 
?>