<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"装逼神器"; 
$im = imagecreatetruecolor(750, 999); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,750,999); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 10, 10, 10); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$time_y=date("Y-m-d");
$blacka = imagecolorallocate($im, 137, 41, 43); 
imagettftext($im, 20, 0, 512, 918, $black, $font, $name); 

//写入时间
imagettftext($im, 20, 0, 485, 950, $black, $font, $time_y);

imagejpeg($im); 
imagedestroy($im); 
?>