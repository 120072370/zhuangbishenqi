<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$namec = $_GET['namec'];
$im = imagecreatetruecolor(1326, 995); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,1326,995); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 30, 0, 320, 714, 
$blacka, $font, $name); 
imagettftext($im, 30, 0, 300, 800, 
$blacka, $font, $nameb); 
imagettftext($im, 30, 0, 970, 860, 
$blacka, $font, $namec); 
imagejpeg($im); 
imagedestroy($im); 
?>