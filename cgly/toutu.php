<?php
header("content-type:image/jpeg");
$id = $_GET['id']?$_GET['id']:"1";
$im = imagecreatetruecolor(1248, 858);
if($id == '10'){ 
$bg = imagecreatefromjpeg('10.jpg');
}
else if($id == '9'){ 
$bg = imagecreatefromjpeg('9.jpg');
}
else if($id == '8'){ 
$bg = imagecreatefromjpeg('8.jpg');
}
else if($id == '7'){ 
$bg = imagecreatefromjpeg('7.jpg');
}
else if($id == '6'){ 
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
 echo 'ЬѕМўВЛТњзу'; 
} 

$black = imagecolorallocate($im, 90, 90, 90);

$text = $name;
$font = '../font/fh.ttf';
imagecopy($im,$bg,0,0,0,0,1248,858);
imagedestroy($bg);
imagettftext($im, 14, 0, 508, 145, $black, $font, $text);
imagejpeg($im);
imagedestroy($im);
?>