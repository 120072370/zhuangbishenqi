<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(627, 800); 
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,627,800); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 16, 16, 16); 
$text = $nameb;
$font = '../font/ysggt.ttf'; 
$fonta = '../font/lxk.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
imagettftext($im, 20, 0, 150, 290, $black, $fonta, $name); 
imagettftext($im, 35, 0, 150, 220, $blacka, $font, $nameb);
imagejpeg($im); 
imagedestroy($im); 
?>