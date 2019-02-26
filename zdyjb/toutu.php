<?php
header("content-type:image/jpeg");
$name = $_GET['name']?$_GET['name']:"装逼神器zhuangxiabi.com";
$nameb = $_GET['nameb'];
$namec = $_GET['namec'];
$im = imagecreatetruecolor(800, 985);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,800,985);
imagedestroy($bg);
$black = imagecolorallocate($im, 237, 160, 140);
$text = $name;
$font = '../font/mnj.ttf';
$fonta = '../font/fzqk.ttf';
$fontb = '../font/fzqk.ttf';
$blacka = imagecolorallocate($im, 0, 0, 0);

$time_y=date("Y");
$time_m=date("m");
$time_d=date("d");


$t1 = "/&#x6708;";
$t2 = "&#x5E74;";
$t3 = "&#x6708;";
$t4 = "&#x65E5;";


imagettftext($im, 22, 0, 170, 700, $black, $fonta, $name);

imagettftext($im, 16, 0, 580, 770, $blacka, $fontb, $nameb);

imagettftext($im, 16, 2, 555, 815, $blacka, $fontb, $namec);


//写入时间
imagettftext($im, 0, 0, 0, 0, $black, $font, $time_y.$t2.$time_m.$t3.$time_d.$t4);



imagejpeg($im);

imagedestroy($im);

?>