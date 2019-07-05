<?php
//影像處理GD+浮水印-

$rand = $_GET['rand'];
$img = imagecreatefromjpeg("./upload/bk.jpg");
$red = ImageColorallocate($img , 255,0,0);
imagettftext($img , 36,rand(-30,30),rand(50,150),rand(50,150) ,$red,"upload/myfont.ttf",$rand);
header("Content-type: image/jpeg");
imagejpeg($img);
ImageDestroy($img);

return  $rand;