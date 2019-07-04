<?php
//影像處理：等比縮放
$dstW = 240 ;$dstH = 240 ;
$src = imagecreatefromjpeg("upload/coffee1.jpg");
$srcW = ImageSX($src); $srcH = ImageSY($src);

if ($srcW >$srcH){
    $dstX = $dstW;
    $dstY = $dstH * $srcH / $srcW ;
}else{
    $dstY = $dstH;
    $dstX = $dstW * $srcW / $srcH ;
}

$dst = ImageCreate($dstX,$dstY);

ImageCopyResized($dst,$src,
    0,0,
    0,0,
    $dstX, $dstY, //圖片的新高寬
    $srcW , $srcH
);

header("Content-type: image/jpeg");
imagejpeg($src);

ImageDestroy($src);
ImageDestroy($dst);


