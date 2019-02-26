<?php
header("content-type:image/jpeg");

$name = $_GET['name']?$_GET['name']:"MOSиГме";
$sex = $_GET['sex']?$_GET['sex']:"дп";
$shen = $_GET['shen']?$_GET['shen']:"дп";


$im = imagecreatetruecolor(1241, 1754);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,1241,1754);
imagedestroy($bg);
$black = imagecolorallocate($im, 40, 40, 40);
$text = $name;
$date = date("Y-m-d");
$font = '../font/fh.ttf';
imagettftext($im, 20, 0, 280, 565, $black, $font, $text);
imagettftext($im, 20, 0, 280, 605, $black, $font, $sex);
imagettftext($im, 20, 0, 280, 735, $black, $font, $shen);
imagettftext($im, 17, 0, 929, 528, $black, $font, $date);


imagejpeg($im);
imagedestroy($im);
?>