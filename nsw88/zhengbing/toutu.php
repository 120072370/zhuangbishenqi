<?php

header("content-type:image/jpeg");

$name = $_GET['name']?$_GET['name']:"www.lianxue.site";

$im = imagecreatetruecolor(800, 1422);

$bg = imagecreatefromjpeg('toutu.jpg');

imagecopy($im,$bg,0,0,0,0,800,1422);

imagedestroy($bg);

$black = imagecolorallocate($im, 60, 60, 60);

$text = $name;

$font = '../font/fh.ttf';

$blacka = imagecolorallocate($im, 3, 3, 3	);

imagettftext($im, 19, 0, 33, 300, $blacka, $font, $name);
imagettftext($im, 22, 0, 33, 422, $blacka, $font, $name);


imagejpeg($im);

imagedestroy($im);

?>