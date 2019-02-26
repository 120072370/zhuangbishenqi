<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(525, 700); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,525,700); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/fzft.ttf'; 
$blacka = imagecolorallocate($im, 137, 41, 43); 
imagettftext($im, 45, -5, 125, 425, $blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>