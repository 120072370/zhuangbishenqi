<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(849, 1018); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,849,1018); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/msyh.ttf'; 
$blacka = imagecolorallocate($im, 178, 81, 65); 
imagettftext($im, 30, -1, 420, 630, $black, $font, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>