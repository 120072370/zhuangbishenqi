<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(875,1166);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,875,1166);
imagedestroy($bg);
$black = imagecolorallocate($im, 0, 0, 0);
$text = $name;
$font = '../font/liguofu.ttf';
$blacka = imagecolorallocate($im, 60, 60, 70);

$time_y=date("Y-m-d");
$time_m=date("m");
$time_d=date("d");



imagettftext($im, 40, 0, 580, 960, $black, $font, $name);





//写入时间
imagettftext($im, 40, 0, 540, 1030, $black, $font, $time_y);



imagejpeg($im);

imagedestroy($im);

?>