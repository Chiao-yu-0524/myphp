<?php   //可用cmd去執行程式
date_default_timezone_set('Asia/Taipei');  //設定時區時間
$mydir = '.';
$fp = @opendir($mydir) or die('server busy') ; //open資料夾，＠是抑制錯誤
while ($file = readdir($fp)){
    echo "{$file} : /n "  ;
}






