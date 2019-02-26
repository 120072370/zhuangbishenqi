<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"恋雪科技";
$im = imagecreatetruecolor(640, 916);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,640,916);
imagedestroy($bg);
$black = imagecolorallocate($im, 18, 28, 19);
$text = $name;
$font = '../font/fh.ttf';

imagettftext($im, 12, 0, 288, 308, $black, $font, $text);




imagejpeg($im);
imagedestroy($im);
?>