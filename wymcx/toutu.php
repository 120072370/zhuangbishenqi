<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷zhuangxiabi.com"; 
$im = imagecreatetruecolor(900, 900); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,900,900); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/fzdh.ttf'; 
$blacka = imagecolorallocate($im, 240, 86, 88); 
imagettftext($im, 29, 0, 620, 850, 
$blacka, $font, $name);
imagejpeg($im); 
imagedestroy($im); 
?>