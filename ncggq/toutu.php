<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷";
$nameb = $_GET['nameb'];
$namec = $_GET['namec'];
$named = $_GET['named'];
$im = imagecreatetruecolor(900, 675);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,900,675);
imagedestroy($bg);
$black = imagecolorallocate($im, 60, 60, 60);
$text = $name;
$font = '../font/ysggt.ttf';
$blacka = imagecolorallocate($im, 250, 247, 92);
$blackb = imagecolorallocate($im, 255, 255, 230);
$blackc = imagecolorallocate($im, 229, 255, 72);


imagettftext($im, 30, 0, 310, 245, $blacka, $font, $name);

imagettftext($im, 40, 0, 265, 326, $blackb, $font, $nameb);

imagettftext($im, 20, 0, 330, 394, $blackb, $font, $namec);

imagettftext($im, 20, 0, 310, 450, $blackc, $font, $named);




imagejpeg($im);

imagedestroy($im);

?>