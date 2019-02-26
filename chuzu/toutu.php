<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"装逼神器";
$nameb = $_GET['nameb']?$_GET['nameb']:"zhuangxiabi"; 
$im = imagecreatetruecolor(800, 1067); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,800,1067); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/fh.ttf'; 
$blacka = imagecolorallocate($im, 70, 70, 70); 

$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");

$t2 = "&#x5E74;";
$t3 = "&#x6708;";
$t4 = "&#x65E5;";

imagettftext($im, 20, 0, 240, 836, $black, $font, $name); 
imagettftext($im, 20, 0, 220, 880, $black, $font, $nameb); 


//写入时间
imagettftext($im, 20, 0, 500, 940, $black, $font, $time_y.$t2.$time_m.$t3.$time_d.$t4);

imagejpeg($im); 
imagedestroy($im); 
?>