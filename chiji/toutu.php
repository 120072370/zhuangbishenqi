<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$js = $_GET['js']?$_GET['js']:"99";
$im = imagecreatetruecolor(960, 540); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,960,540); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 255, 255, 255); 
$blacka = imagecolorallocate($im, 100, 40, 25);
$blackb = imagecolorallocate($im, 90, 90, 90);  
$text = $name; 
$font = '../font/fzdh.ttf'; 
imagettftext($im, 26, 0, 48, 58, $black, $font, $name); 
imagettftext($im, 18, 0, 190, 173, $black, $font, $js); 
imagettftext($im, 14, 0, 458, 395, $blacka, $font, $js); 
imagettftext($im, 13, 0, 909, 30, $blackb, $font, $js); 
imagejpeg($im); 
imagedestroy($im); 
?>