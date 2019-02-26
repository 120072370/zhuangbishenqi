<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"×°±ÆÉñÆ÷"; 
$im = imagecreatetruecolor(851, 1208); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,851,1208); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/msyh.ttf';
$fonta = '../font/fzdh.ttf';  
$time=date("Y-m-d");
$t1 = "&#x4E2D;&#x56FD;&#x571F;&#x8C6A; ";
$t2 = "&#x4E70;&#x4E0B;&#x4E16;&#x754C;&#x6700;&#x8C6A;&#x534E;&#x98DE;&#x673A;200&#x5E73;&#x7C73;&#x5982;&#x4E94;&#x661F;&#x9152;&#x5E97; ";
$t3 = "21&#x4EBF;&#x5143; ";
$blacka = imagecolorallocate($im, 0, 0, 0); 
$blackaa = imagecolorallocate($im, 183, 183, 183);
$blackab = imagecolorallocate($im, 40, 40, 40);  
imagettftext($im, 18, 0, 83, 142, 
$blacka, $fonta, $t1.$name.$t2); 
imagettftext($im, 12, 0, 168, 246, 
$blackab, $font, $t3);
imagettftext($im, 9, 0, 83, 172, $blackaa, $font, $time);
imagejpeg($im); 
imagedestroy($im); 
?>