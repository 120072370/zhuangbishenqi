<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(880, 994); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,880,994); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/wryh.ttf'; 
$blacka = imagecolorallocate($im, 243, 218, 99); 
imagettftext($im, 28, 0, 570, 408, 
$blacka, $font, $name); 
imagettftext($im, 18, 0, 158, 600, 
$blacka, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>