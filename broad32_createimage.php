<?php

//1.canvas (new)
//2.process
//3.output => 1.display  2.export to file
//4.free memory

$rate =$_GET['rate'] ;//50%

$img = ImageCreateTrueColor(400,20);
$yellow = ImageColorallocate($img , 255,255,0);
imagefilledrectangle($img , 0,0,400,20 ,$yellow);
$red = ImageColorallocate($img , 255,0,0);
imagefilledrectangle($img , 0,0,$rate*400/100,20 ,$red);

header("Content-type: image/jpeg");
imagejpeg($img);
ImageDestroy($img);



?>
