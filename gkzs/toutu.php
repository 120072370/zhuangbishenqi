<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$nameb = $_GET['nameb'];
$namec = $_GET['namec'];
$named = $_GET['named'];
$namee = $_GET['namee'];
$im = imagecreatetruecolor(800, 1071);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,800,1071);
imagedestroy($bg);
$black = imagecolorallocate($im, 45, 45, 45);
$text = $name;
$font = '../font/fh.ttf';
$blacka = imagecolorallocate($im, 76, 71, 68);

$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");


imagettftext($im, 20, 0, 400, 418, $black, $font, $name);

imagettftext($im, 20, 0, 630, 415, $black, $font, $nameb);

imagettftext($im, 20, 0, 400, 485, $black, $font, $namec);

imagettftext($im, 20, 0, 225, 870, $black, $font, $named);

imagettftext($im, 20, 0, 275, 950, $black, $font, $namee);


//写入时间
imagettftext($im, 0, 0, 0, 0, $blacka, $font, $time_y.$t2.$time_m.$t3.$time_d.$t4);

imagettftext($im, 0, 0, 0, 0, $blacka, $font, $time_y.$t2.$time_m.$t3.$time_d.$t4);


imagejpeg($im);

imagedestroy($im);

?>