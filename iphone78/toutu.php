<?php
header("content-type:image/jpeg"); 
$name = $_GET['name']?$_GET['name']:"zhuangxiabi.com"; 
$im = imagecreatetruecolor(1242, 1772); 
$bg = imagecreatefromjpeg('toutu.jpg'); 
imagecopy($im,$bg,0,0,0,0,1242,1772); 
imagedestroy($bg); 
$black = imagecolorallocate($im, 60, 60, 60); 
$text = $name; 
$font = '../font/msyh.ttf';
$fonta = '../font/fzdh.ttf';  
$fontb = '../font/fh.ttf';  
$time=date("Y-m-d");
$t1 = "&#x4E2D;&#x56FD;&#x571F;&#x8C6A; ";
$t2 = "&#x4E3A;&#x81EA;&#x5BB6;&#x72D7;&#x72D7;&#x8D2D;&#x4E70;8&#x53F0;iphone7 ";
$blacka = imagecolorallocate($im, 0, 0, 0); 
$blackaa = imagecolorallocate($im, 170, 170, 170);
$blackab = imagecolorallocate($im, 40, 40, 40);  
imagettftext($im, 38, 0, 70, 274, 
$blacka, $fonta, $t1.$name.$t2); 
imagettftext($im, 30, 0, 52, 436, $blackaa, $font, $time);
imagettftext($im, 38, 0, 664, 1723, 
$blacka, $fontb, $name); 
imagejpeg($im); 
imagedestroy($im); 
?>