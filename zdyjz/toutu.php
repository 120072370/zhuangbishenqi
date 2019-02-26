<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$jiangxiang = $_GET['jiangxiang'];
$danwei = $_GET['danwei'];
$im = imagecreatetruecolor(650, 448);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,650,448);
imagedestroy($bg);
$black = imagecolorallocate($im, 68, 58, 56);
$text = $name;
$font = '../font/fh.ttf';
$fonta = '../font/liguofu.ttf';
$fontb = '../font/jdffh.ttf';
$blacka = imagecolorallocate($im, 253, 2, 0);

$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");


$t1 = "/&#x6708;";
$t2 = "&#x5E74;";
$t3 = "&#x6708;";
$t4 = "&#x65E5;";


imagettftext($im, 22, 0, 66, 213, $black, $fonta, $name);

imagettftext($im, 50, 0, 165, 288, $blacka, $fontb, $jiangxiang);

imagettftext($im, 16, 2, 430, 350, $black, $font, $danwei);


//写入时间
imagettftext($im, 14, 0, 430, 378, $black, $font, $time_y.$t2.$time_m.$t3.$time_d.$t4);



imagejpeg($im);

imagedestroy($im);

?>