<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$namec = $_GET['namec'];
$im = imagecreatetruecolor(1012, 848); 
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,1012,848); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $nameb;
$font = '../font/liguofu.ttf'; 
$fonta = '../font/sxks.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 35, -10, 95, 344, $blacka, $fonta, $name); 
imagettftext($im, 20, 5, 720, 440, $blacka, $font, $nameb);
imagettftext($im, 20, 5, 730, 500, $blacka, $font, $namec);  
imagejpeg($im); 
imagedestroy($im); 
?>