<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"װ������zhuangxiabi.com";
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(1000,563);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,1000,563);
imagedestroy($bg);
$black = imagecolorallocate($im, 0, 0, 0);
$text = $name;
$font = '../font/sxks.ttf';
$blacka = imagecolorallocate($im, 130, 130, 130);

$time_y=date("Y.m.d");
$time_m=date("m");
$time_d=date("d");



imagettftext($im, 25, 18, 690, 380, $black, $font, $name);





//д��ʱ��
imagettftext($im, 18, 22, 620, 110, $black, $font, $time_y);



imagejpeg($im);

imagedestroy($im);

?>