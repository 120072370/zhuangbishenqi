<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(640, 1024); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,640,1024); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 255, 255, 255); 
$text = $name; 
$t1= "&#x6211;&#x662F;&#x7B2C;18";
$time_d=date("d");
$time_h=date("i");
$time_s=date("s");
$t6= "&#x4E2A;";
$t7= "&#x6211;&#x662F;";
$font = '../font/msyh.ttf'; 
$fonta = '../font/fzdh.ttf'; 
$len = mb_strlen($name,"UTF-8");
$left_x = (640-$len*30)/3;
$blacka = imagecolorallocate($im, 240, 86, 88); 
imagettftext($im, 38, 0, $left_x, 650, $black, $fonta, $t7.$name);
imagettftext($im, 35, 0, 115, 726, $black, $font, $t1.$time_d.$time_h.$time_s.$t6);
imagejpeg($im); 
imagedestroy($im); 
?>