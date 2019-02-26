<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装下逼"; 
$id = $_GET['id']?$_GET['id']:"1";
$im = imagecreatetruecolor(300, 300);
if($id == '6'){ 
$bg = imagecreatefromjpeg('6.jpg');
}
else if($id == '5'){ 
$bg = imagecreatefromjpeg('5.jpg');
}
else if($id == '4'){ 
$bg = imagecreatefromjpeg('4.jpg');
}
else if($id == '3'){ 
$bg = imagecreatefromjpeg('3.jpg');
}
else if($id == '2'){ 
$bg = imagecreatefromjpeg('2.jpg');
}
else if($id == '1'){ 
$bg = imagecreatefromjpeg('1.jpg');
}
else{ 
 echo '条件不满足'; 
} 

$black = imagecolorallocate($im, 255, 255, 255);

$text = $name;
$font = '../font/fzdh.ttf';
imagecopy($im,$bg,0,0,0,0,300,300);
imagedestroy($bg);
imagettftext($im, 32, 18, 80, 120, $black, $font, $name);
imagejpeg($im);
imagedestroy($im);
?>