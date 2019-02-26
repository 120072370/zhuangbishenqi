<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$nameb = $_GET['nameb'];
$namec = $_GET['namec'];
$named = $_GET['named'];
$namee = $_GET['namee'];
$namef = $_GET['namef'];
$nameg = $_GET['nameg'];
$nameh = $_GET['nameh'];
$im = imagecreatetruecolor(440, 587); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,440,587); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/liguofu.ttf'; 
$blacka = imagecolorallocate($im, 20, 32, 28); 
imagettftext($im, 25, 0, 250, 133, 
$blacka, $font, $name); 
imagettftext($im, 25, 0, 250, 200, 
$blacka, $font, $nameb); 
imagettftext($im, 25, 0, 250, 265, 
$blacka, $font, $namec); 
imagettftext($im, 25, 0, 250, 335, 
$blacka, $font, $named);
imagettftext($im, 25, 0, 250, 411, 
$blacka, $font, $namee);
imagettftext($im, 25, 0, 250, 480, 
$blacka, $font, $namef);
imagettftext($im, 25, 0, 250, 555, 
$blacka, $font, $nameg);
imagettftext($im, 20, 3, 345, 500, 
$blacka, $font, $nameh);
imagejpeg($im); 
imagedestroy($im); 
?>