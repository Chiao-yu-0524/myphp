<?php
    //發放撲克牌並理牌:用for + do 
        $poker = [];
    for ($i = 0 ; $i < 52 ; $i++) {
       
        //檢查迴圈

        do {
            $rand = rand(1,52); //0~52亂數
            //檢查迴圈
            $isrepeat = false ;
            for ($j = 0 ; $j < $i ; $j++ ){
                if ($poker[$j] == $rand ){
                    //判斷重複時要做什麼
                    $isrepeat = true ;
                    break ;
                }
            }
        } while($isrepeat) ;  //是否重複，是重複就重新產生亂數
        
        if ($isrepeat) {  //判斷重複然後把i減少
            $i-- ;
            continue ;
        }
        $poker[$i] = $rand;
    }
    foreach ($poker as $value){
        echo $value . '<br>';
    }

    