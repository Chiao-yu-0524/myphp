<?php  //影像處理GD+浮水印-
$img = imagecreatefromjpeg ("./upload/bk.jpg");
$red = ImageColorAllocate($img, 255,0,0);
imagettftext ($img, 36, rand(-30,30), 100, 100, $red, "upload/myfont.ttf", "Hello, World");
header("Content-type: image/jpeg");
ImageJpeg($img);
ImageDestroy($img);