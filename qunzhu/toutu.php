<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(776, 1190); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,776,1190); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/msyh.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 33, 0, 105, 158, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>