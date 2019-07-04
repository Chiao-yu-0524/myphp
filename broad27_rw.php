<?php   //
    $fp = @fopen('./dir11/file2.txt','r+');  //開啟檔案並讀取，可讀可寫 
    //w 會清除元資料重新寫入
    //a 會直接加入資料到裡面去，接在原資料後面   
    fwrite($fp, "heello ,world\n12345678\n3456789");   //寫入資料中
    fflush($fp); //清除暫存，帶出資料;
    fclose($fp);

    