<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(960,1167);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,960,1167);
imagedestroy($bg);
$black = imagecolorallocate($im, 0, 0, 0);
$text = $name;
$font = '../font/liguofu.ttf';
$blacka = imagecolorallocate($im, 60, 60, 70);

$time_y=date("Y-m-d");
$time_m=date("m");
$time_d=date("d");



imagettftext($im, 40, 0, 580, 1040, $black, $font, $name);





//写入时间
imagettftext($im, 40, 0, 550, 1100, $black, $font, $time_y);



imagejpeg($im);

imagedestroy($im);

?>