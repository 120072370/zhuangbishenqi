<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(946, 482); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,946,482); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/fh.ttf'; 
$blacka = imagecolorallocate($im, 105, 105, 105); 
imagettftext($im, 50, 0, 140, 470, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>