<?php

header("content-type:image/jpeg");

$name = $_GET['name']?$_GET['name']:"װ������";

$add = $_GET['add']?$_GET['add']:"�Ϻ���";

$im = imagecreatetruecolor(640, 1138);

$bg = imagecreatefromjpeg('toutu.jpg');

imagecopy($im,$bg,0,0,0,0,640,1138);

imagedestroy($bg);

$black = imagecolorallocate($im, 150, 150, 150);

$text = $name;

$font = '../font/fh.ttf';
/*
date_default_timezone_set('Asia/Shanghai');//�˾���������ʱ���
$black = imagecolorallocate($im, 100, 100, 100);
$blacka = imagecolorallocate($im, 134, 134, 134);
$nowtime=date("Y-m-d H:i:s");
$cj_time=date('Y-m-d H:i:s',strtotime("$nowtime-3 hour"));
$fk_time=date('Y-m-d H:i:06',strtotime("$nowtime-1 hour"));
//$fh_time=date('Y-m-d H:i:s',strtotime("$nowtime-3 minute"));
$fh_time=date('Y-m-d H:i:s',strtotime("$nowtime-328 second"));
*/
imagettftext($im, 16, 0, 145, 367, $black, $font, $name);
imagettftext($im, 16, 0, 175, 404, $black, $font, $add);


imagejpeg($im);

imagedestroy($im);

?>