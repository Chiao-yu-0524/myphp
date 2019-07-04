<?php   //開啟檔案並讀取
    $fp = @fopen('https://tw.stock.yahoo.com/q/bc?s=2317','r');    
    while ($c = fgets($fp)){  
        if (preg_match('/2317/' , $line)){   //抓出有2317的值
            echo nl2br($line) ;
        }
    }
    var_dump($fp);
    fclose($fp);

