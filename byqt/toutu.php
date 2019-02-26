<?php

header("content-type:image/jpeg");

$name = $_GET['name']?$_GET['name']:"มตัฉฟฦผผ";

$im = imagecreatetruecolor(767, 1000);

$bg = imagecreatefromjpeg('toutu.jpg');


$black = imagecolorallocate($im, 0, 4, 2);


$text = $name;


$date = date("Y-m-d");


$font = '../font/liguofu.ttf';


imagecopy($im,$bg,0,0,0,0,767,1000);


imagettftext($im, 18, 0, 413, 612, $black, $font, $text);




imagejpeg($im);

imagedestroy($im);

?>