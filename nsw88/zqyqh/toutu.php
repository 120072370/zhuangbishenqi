<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(1000, 1334); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,1000,1334); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/fh.ttf'; 
$blacka = imagecolorallocate($im, 80, 80, 80); 
imagettftext($im, 18, -1, 211, 431, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>