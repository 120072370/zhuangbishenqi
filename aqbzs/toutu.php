<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(800,1067);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,800,1067);
imagedestroy($bg);
$black = imagecolorallocate($im, 68, 58, 56);
$text = $name;
$font = '../font/sxks.ttf';
$blacka = imagecolorallocate($im, 60, 60, 70);

$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");


$t1 = "/&#x6708;";
$t2 = "&#x5E74;";
$t3 = "&#x6708;";
$t4 = "&#x65E5;";


imagettftext($im, 20, 0, 555, 906, $black, $font, $name);

imagettftext($im, 20, 0, 265, 448, $blacka, $font, $nameb);




//写入时间
imagettftext($im, 15, 0, 554, 945, $blacka, $font, $time_y.$t2.$time_m.$t3.$time_d.$t4);



imagejpeg($im);

imagedestroy($im);

?>