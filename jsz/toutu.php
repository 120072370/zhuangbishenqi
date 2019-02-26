<?php
error_reporting(0); 
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"装逼神器";
$xb = $_GET['xb']?$_GET['xb']:"装逼神器";
$mz = $_GET['mz']?$_GET['mz']:"装逼神器";
$id = $_GET['id']?$_GET['id']:"装逼神器";
$im = imagecreatetruecolor(1385, 2072);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,1385,2072);
imagedestroy($bg);
$black = imagecolorallocate($im, 100, 100, 100);
$text = $name;
$font = '../font/fzsh.ttf';

imagettftext($im, 25, 0, 417, 448, $black, $font, $name);
imagettftext($im, 25, 0, 435, 503, $black, $font, $xb);
imagettftext($im, 25, 0, 375, 617, $black, $font, $mz);
imagettftext($im, 25, 0, 385, 785, $black, $font, $id);
imagettftext($im, 25, 0, 1070, 455, $black, $font, $name);
imagettftext($im, 28, 0, 970, 560, $black, $font, $id);

$showtime=date("Y年m月d日");
imagettftext($im, 0, 0, 0, 0, $black, $font, $showtime);

imagejpeg($im);
imagedestroy($im);
?>