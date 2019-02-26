<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(557, 990); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,557,990); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 80, 80, 80); 
$text = $name; 
$font = '../font/msyh.ttf'; 
$blacka = imagecolorallocate($im, 0, 0, 0); 
$time=date("H:s");
imagettftext($im, 18, 0, 75, 448, $black, $font, $name);
imagettftext($im, 15, 0, 260, 20, $blacka, $font, $time);
imagejpeg($im); 
imagedestroy($im); 
?>