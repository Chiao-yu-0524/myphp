<?php
    //發放撲克牌並理牌:非資訊思考模式，用if +for
        $poker = [];
    for ($i = 0 ; $i < 52 ; $i++) {
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
        if ($isrepeat) {  //判斷重複然後把i減少
            $i-- ;
            continue ;
        }
        $poker[$i] = $rand;
    }
    foreach ($poker as $value){
        echo $value . '<br>';
    }

    