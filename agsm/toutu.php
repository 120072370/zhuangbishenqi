<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(597,840);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,597,840);
imagedestroy($bg);
$black = imagecolorallocate($im, 0, 0, 0);
$text = $name;
$fonta = '../font/fh.ttf';
$font = '../font/liguofu.ttf';
$blacka = imagecolorallocate($im, 255, 255, 0);

$time_y=date("Y-m-d");
$time_m=date("m");
$time_d=date("d");



imagettftext($im, 35, 0, 330, 690, $blacka, $font, $name);





//写入时间
imagettftext($im, 20, 0, 320, 730, $blacka, $font, $time_y);



imagejpeg($im);

imagedestroy($im);

?>