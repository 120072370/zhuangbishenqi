<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$xingbie = $_GET['xingbie'];
$im = imagecreatetruecolor(600,800); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,600,800); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 0, 0, 0); 
$text = $name; 
$font = '../font/msyh.ttf'; 
$blacka = imagecolorallocate($im, 80, 80, 80); 
$time_y=date("Y-m-d");
$time_m=date("m");
$time_d=date("d");
$time_h=date("Y-m-d-h:s");
imagettftext($im, 12, 0, 70, 125, $blacka, $font, $name);
imagettftext($im, 12, 0, 230, 692, $blacka, $font, $name);
imagettftext($im, 12, 0, 230, 122, $black, $font, $xingbie);
imagettftext($im, 10, 0, 90, 723, $blacka, $font, $time_y);
imagettftext($im, 10, 0, 240, 723, $blacka, $font, $time_y);
imagettftext($im, 10, 0, 400, 723, $blacka, $font, $time_h);
imagejpeg($im); 
imagedestroy($im); 
?>