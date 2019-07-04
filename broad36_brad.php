<?php
$img = imagecreatefromjpeg ("upload/coffee1.jpg");
$yellow = ImageColorAllocate($img, 255,255,0);
imagettftext ($img, 36, rand(-30,30), 10, 20, $yellow, 
    "upload/myfont.ttf", "Hello, World");
header("Content-type: image/jpeg");
ImageJpeg($img);
ImageDestroy($img);
