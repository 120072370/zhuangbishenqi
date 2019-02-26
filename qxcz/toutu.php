<?php

header("content-type:image/jpeg");

$name = $_GET['name']?$_GET['name']:"www.lianxue.site";
$sex = $_GET['sex']?$_GET['sex']:"boy";

$im = imagecreatetruecolor(640, 800);

if($sex == '1')
{
	$bg = imagecreatefromjpeg('toutu.jpg');
	}
else
{
	$bg = imagecreatefromjpeg('toutu1.jpg');
	}

imagecopy($im,$bg,0,0,0,0,640,800);

imagedestroy($bg);

$black = imagecolorallocate($im, 134, 134, 134);

$text = $name;

$font = '../font/hkww.ttc';

$black = imagecolorallocate($im, 55, 13, 9);



imagettftext($im, 22, 0, 154, 721, $black, $font, $name);




imagejpeg($im);

imagedestroy($im);

?>