<?php

header("content-type:image/jpeg");

$qidian = $_GET['qidian']?$_GET['qidian']:"装逼神器";
$zhongdian = $_GET['zhongdian'];
$checi = $_GET['checi'];
$jiage = $_GET['jiage'];
$name = $_GET['name'];
$shenfen = $_GET['shenfen'];
$yuefen = $_GET['yuefen'];
$riqi = $_GET['riqi'];
$xiaoshi = $_GET['xiaoshi'];
$fenzhong = $_GET['fenzhong'];

$im = imagecreatetruecolor(379, 234);

$bg = imagecreatefromjpeg('toutu.jpg');

imagecopy($im,$bg,0,0,0,0,379,234);

imagedestroy($bg);

$black = imagecolorallocate($im, 60, 60, 60);

$text = $name;

$font = '../font/fh.ttf';

//$ida = number_format($id);

//imagettftext($im, 30, 0, 628, 363, $black, $font, $ida);

$blacka = imagecolorallocate($im, 15, 23, 25);

$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");
$time_h=date("h:s");
$t1 = ":";


imagettftext($im, 15, 0, 65, 47, $blacka, $font, $qidian);
imagettftext($im, 15, 0, 268, 47, $blacka, $font, $zhongdian);
imagettftext($im, 15, 0, 166, 47, $blacka, $font, $checi);
imagettftext($im, 13, 0, 44, 101, $blacka, $font, $jiage);
imagettftext($im, 13, 0, 200, 150, $blacka, $font, $name);
imagettftext($im, 13, 0, 19, 150, $blacka, $font, $shenfen);

//写入时间
imagettftext($im, 9, 0, 28, 83, $blacka, $font, $time_y);
imagettftext($im, 9, 0, 72, 83, $blacka, $font, $yuefen);
imagettftext($im, 9, 0, 109, 83, $blacka, $font, $riqi);
imagettftext($im, 9, 0, 143, 83, $blacka, $font, $xiaoshi.$t1.$fenzhong);



imagejpeg($im);

imagedestroy($im);

?>