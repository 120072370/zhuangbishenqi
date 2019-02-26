<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(720, 1280); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,720,1280); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 240, 220, 55); 
$text = $name; 
$font = '../font/fzdh.ttf'; 
$len = mb_strlen($name,"UTF-8");
$blacka = imagecolorallocate($im, 240, 86, 88); 
imagettftext($im, 25, 0, 85, 865, $black, $font, $name);
imagejpeg($im); 
imagedestroy($im); 
?>