<?php
//影像處理GD+浮水印-
$img = imagecreatefromjpeg("./upload/coffee1.jpg");
$yellow = ImageColorallocate($img , 255,255,0);
imagettftext($img , 36,rand(-30,30),100,100 ,$yellow,"upload/myfont.ttf","hello,world");
header("Content-type: image/jpeg");
imagejpeg($img);
ImageDestroy($img);

