<?php

header("content-type:image/jpeg");

$name = $_GET['name']?$_GET['name']:"װ������";

$yys = $_GET['yys']?$_GET['yys']:"�й��ƶ�";

$num = $_GET['num']?$_GET['num']:"165397";

$im = imagecreatetruecolor(600, 988);

$bg = imagecreatefromjpeg('toutu.jpg');

imagecopy($im,$bg,0,0,0,0,600,988);

imagedestroy($bg);

$black = imagecolorallocate($im, 25, 25, 25);

$text = $name;

$font = '../font/msyh.ttf';
/*
date_default_timezone_set('Asia/Shanghai');//�˾���������ʱ���
$black = imagecolorallocate($im, 118, 118, 118);
$blacka = imagecolorallocate($im, 134, 134, 134);
$nowtime=date("Y-m-d H:i:s");
$cj_time=date('Y-m-d H:i:s',strtotime("$nowtime-3 hour"));
$fk_time=date('Y-m-d H:i:06',strtotime("$nowtime-1 hour"));
//$fh_time=date('Y-m-d H:i:s',strtotime("$nowtime-3 minute"));
$fh_time=date('Y-m-d H:i:s',strtotime("$nowtime-328 second"));
*/
$time = date("H:i");
$t1 = "&#x5C0A;&#x656C;&#x7684; ";
$t2 = " &#x60A8;&#x597D;&#xFF1A;";
$t3 = "&#x60A8;&#x662F;&#x7B2C; ";
$t4 = " &#x540D;&#x9884;&#x5B9A;iPhone8&#x7684;&#x7528;&#x6237;&#x3002;";
imagettftext($im, 14, 0, 275, 25, $black, $font, $time);
imagettftext($im, 15, 0, 70, 23, $black, $font, $yys);
imagettftext($im, 17, 0, 34, 300, $black, $font, $t1.$name.$t2);
imagettftext($im, 17, 0, 90, 350, $black, $font, $t3.$num.$t4);


imagejpeg($im);

imagedestroy($im);

?>