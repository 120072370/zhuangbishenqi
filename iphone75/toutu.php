<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器";
$yinhang = $_GET['yinhang'];
$xingming = $_GET['xingming'];
$kahao = $_GET['kahao'];
$im = imagecreatetruecolor(546, 971);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,546,971);
imagedestroy($bg);
$black = imagecolorallocate($im, 60, 60, 60);
$text = $name;
$font = '../font/fh.ttf';
$blacka = imagecolorallocate($im, 253, 253, 253);

$time_m=date("m");
$time_d=date("d");
$time_h=date("h:s");

$t1 = "&#x60A8;&#x7684;&#x5C3E;&#x53F7;&#x4E3A; ";
$t2 = "&#x7684;";
$t3 = "&#x5361;&#x4E8E;16&#x5E74; ";
$t4 = "&#x6708;";
$t5 = "&#x65E5;";
$t6 = "&#x4ED6;&#x884C;&#x8F6C;&#x5165;&#x91D1;&#x989D;RMB300,000.00&#xFF0C;&#x5F53;&#x524D;&#x4F59;&#x989D;&#x4E3A;300,839.00&#x3002;";


imagettftext($im, 14, 0, 60, 26, $blacka, $font, $name);

imagettftext($im, 13, 0, 60, 46, $blacka, $font, $xingming.$t1.$kahao.$t2.$yinhang.$t3.$time_m.$t4.$time_d.$t5.$time_h);


//写入时间
imagettftext($im, 13, 0, 60, 66, $blacka, $font, $t6);


imagejpeg($im);

imagedestroy($im);

?>