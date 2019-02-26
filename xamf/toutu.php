<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$nameb = $_GET['nameb'];
$im = imagecreatetruecolor(800,922);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,800,922);
imagedestroy($bg);
$black = imagecolorallocate($im, 0, 0, 0);
$text = $name;
$font = '../font/fh.ttf';
$blacka = imagecolorallocate($im, 130, 130, 130);

$time_y=date("Y-m-d");
$time_m=date("m");
$time_d=date("d");



imagettftext($im, 12, -4, 350, 242, $blacka, $font, $name);





//写入时间
imagettftext($im, 12, -3, 342, 385, $blacka, $font, $time_y);



imagejpeg($im);

imagedestroy($im);

?>