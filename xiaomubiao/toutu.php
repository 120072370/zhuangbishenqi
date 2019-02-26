<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(512, 578); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,512,578); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/fh.ttf'; 
$blacka = imagecolorallocate($im, 255, 255, 255); 
imagettftext($im, 13, 0, 82, 533, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>