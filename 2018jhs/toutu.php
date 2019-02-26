<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(786, 1002); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,786,1002); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 10, 10, 10); 
$text = $name; 
$font = '../font/liguofu.ttf';
$time=date("Y-m-d"); 
imagettftext($im, 30, 0, 437, 862, $black, $font, $name); 
imagettftext($im, 25, 0, 550, 930, $black, $font, $time); 
imagejpeg($im); 
imagedestroy($im); 
?>