<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"װ������"; 
$im = imagecreatetruecolor(800, 683); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,800,683); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/fh.ttf'; 
$blacka = imagecolorallocate($im, 105, 105, 105); 
imagettftext($im, 12, 0, 81, 417, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>