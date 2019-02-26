<?php
error_reporting(0); 
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"亿酷网络科技bjlm123.taobao.com";

$im = imagecreatetruecolor(700,933);
$bg = imagecreatefromjpeg('bjlm123.taobao.com.jpg');
imagecopy($im,$bg,0,0,0,0,700,933);
imagedestroy($bg);
$black = imagecolorallocate($im, 70, 70, 70);
$text = $name;
$font = '../font/song.ttf';
imagettftext($im, 11, 0, 235, 678, $black, $font, $text);


imagejpeg($im);
imagedestroy($im);
?>