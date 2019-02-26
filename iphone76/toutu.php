<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$youxiang = $_GET['youxiang'];
$im = imagecreatetruecolor(700, 1243); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,700,1243); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 53, 138, 247); 
$text = $name; 
$font = '../font/msyh.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");
$time_h=date("h:s");
$len = mb_strlen($name,"UTF-8");
$len_a = mb_strlen($youxiang,"UTF-8");
$left_x = (700-$len*30)/2;
$left_z = (700-$len_a*12)/2;
imagettftext($im, 23, 0, $left_x, 168, $blacka, $font, $name);
imagettftext($im, 15, 0, $left_z, 210, $black, $font, $youxiang);
imagettftext($im, 16, 0, 205, 755, $blacka, $font, $time_y);
imagettftext($im, 16, 0, 274, 755, $blacka, $font, $time_m);
imagettftext($im, 16, 0, 313, 755, $blacka, $font, $time_d);
imagettftext($im, 16, 0, 324, 25, $blacka, $font, $time_h);
imagejpeg($im); 
imagedestroy($im); 
?>