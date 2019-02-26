<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$bumen = $_GET['bumen'];
$qian = $_GET['qian'];
$hou = $_GET['hou'];
$im = imagecreatetruecolor(983, 1311);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,983,1311);
imagedestroy($bg);
$black = imagecolorallocate($im, 68, 58, 56);
$text = $name;
$font = '../font/fh.ttf';
$fonta = '../font/liguofu.ttf';
$blacka = imagecolorallocate($im, 76, 71, 68);

$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");


$t1 = "/&#x6708;";
$t2 = "&#x5E74;";
$t3 = "&#x6708;";
$t4 = "&#x65E5;";


imagettftext($im, 25, 0, 280, 1120, $black, $fonta, $name);

imagettftext($im, 15, 0, 280, 378, $blacka, $font, $name);

imagettftext($im, 15, 2, 683, 372, $blacka, $font, $bumen);

imagettftext($im, 15, 0, 311, 430, $blacka, $font, $qian.$t1);

imagettftext($im, 15, 0, 311, 480, $blacka, $font, $hou.$t1);


//写入时间
imagettftext($im, 14, 0, 280, 550, $blacka, $font, $time_y.$t2.$time_m.$t3.$time_d.$t4);

imagettftext($im, 14, 0, 280, 1216, $blacka, $font, $time_y.$t2.$time_m.$t3.$time_d.$t4);


imagejpeg($im);

imagedestroy($im);

?>