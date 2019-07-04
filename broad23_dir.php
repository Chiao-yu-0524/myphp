<?php
date_default_timezone_set('Asia/Taipei');  //設定時區時間
$mydir = '.';
$fp = @opendir($mydir) or die('server busy') ; //open資料夾，＠是抑制錯誤
while ($file = readdir($fp)){
    $size = filesize($file); //filesize=檔案大小
    $mtime = filemtime($file);//filemtime=檔案修改時間
    $ntime = date('Y-m-d H:i:s' , $mtime);
    echo $file .':'.$size .':'.$ntime.'<br>';
    
};