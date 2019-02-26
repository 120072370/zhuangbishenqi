<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(1062, 1280); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,1062,1280); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 20, 20, 20); 
$text = $name; 
$font = '../font/fh.ttf'; 
$blacka = imagecolorallocate($im, 137, 41, 43); 
imagettftext($im, 25, 0, 340, 605, $black, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>