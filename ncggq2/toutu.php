<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(640, 360); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,640,360); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/gysj.ttf'; 
$blacka = imagecolorallocate($im, 230, 212, 212); 
imagettftext($im, 15, 0, 390, 236, 
$blacka, $font, $name); 
imagettftext($im, 15, 0, 371, 260, 
$blacka, $font, $nameb); 
imagejpeg($im); 
imagedestroy($im); 
?>