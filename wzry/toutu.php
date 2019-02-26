<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(750, 421); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,750,421); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 250, 250, 250); 
$text = $name; 
$font = '../font/fh.ttf'; 
$blacka = imagecolorallocate($im, 137, 41, 43); 
imagettftext($im, 8, 0, 352, 143, $black, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>