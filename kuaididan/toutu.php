<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$shoujian = $_GET['shoujian'];
$wupin = $_GET['wupin'];
$im = imagecreatetruecolor(1144, 726); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,1144,726); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");
$blacka = imagecolorallocate($im, 10, 2, 255); 
imagettftext($im, 25, 3, 190, 125, 
$blacka, $font, $name); 
imagettftext($im, 25, 5, 840, 85, 
$blacka, $font, $shoujian); 
imagettftext($im, 20, 0, 190, 405, 
$blacka, $font, $wupin); 
imagettftext($im, 28, 0, 200, 620, 
$blacka, $font, $name);
imagettftext($im, 20, 2, 185, 670, $blacka, $font, $time_y);
imagettftext($im, 20, 2, 270, 670, $blacka, $font, $time_m);
imagettftext($im, 20, 2, 340, 670, $blacka, $font, $time_d);
imagejpeg($im); 
imagedestroy($im); 
?>