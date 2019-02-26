<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(595, 615); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,595,615); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");
$blacka = imagecolorallocate($im, 219, 3, 42); 
imagettftext($im, 22, 0, 150, 364, 
$blacka, $font, $name); 
imagettftext($im, 20, 2, 435, 525, 
$blacka, $font, $nameb); 
imagettftext($im, 20, 1, 402, 548, $blacka, $font, $time_y);
imagettftext($im, 20, 1, 465, 548, $blacka, $font, $time_m);
imagettftext($im, 20, 1, 502, 548, $blacka, $font, $time_d);
imagejpeg($im); 
imagedestroy($im); 
?>