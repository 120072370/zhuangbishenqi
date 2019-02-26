<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(603, 1071); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,603,1071); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 98, 98, 98); 
$text = $name; 
$font = '../font/msyh.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 

imagettftext($im, 14, 0, 152, 306, $black, $font, $name);
imagejpeg($im);
imagedestroy($im); 
?>