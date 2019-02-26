<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(400, 329); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,400,329); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$time=date("Y-m-d");
$blacka = imagecolorallocate($im, 23, 23, 23); 
imagettftext($im, 14, 0, 290, 275, 
$black, $font, $text); 
imagettftext($im, 12, 5, 280, 300, $black, $font, $time);
imagejpeg($im); 
imagedestroy($im); 
?>