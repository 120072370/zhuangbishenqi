<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$sj = $_GET['sj']?$_GET['sj']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(1252, 1262); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,1252,1262); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 65, 65, 65); 
$text = $name; 
$font = '../font/fzdh.ttf'; 
$blacka = imagecolorallocate($im, 240, 86, 88); 
imagettftext($im, 20, 0, 695, 1043, $black, $font, $name);
imagettftext($im, 20, 0, 786, 1082, $black, $font, $sj);
imagejpeg($im); 
imagedestroy($im); 
?>