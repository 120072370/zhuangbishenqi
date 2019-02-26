<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"装逼神器"; 
$im = imagecreatetruecolor(440, 782); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,440,782); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 255, 255, 255); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$time_y=date("Y-m-d");
$blacka = imagecolorallocate($im, 137, 41, 43); 
imagettftext($im, 25, 0, 300, 710, $black, $font, $name); 

//写入时间
imagettftext($im, 25, 0, 270, 745, $black, $font, $time_y);

imagejpeg($im); 
imagedestroy($im); 
?>