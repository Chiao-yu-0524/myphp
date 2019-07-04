<?php
    //發放撲克牌並理牌:非資訊思考模式，用if +for

    for($i=0;$i<52;$i++){
        $poker[$i]= $i;
    }
    for($i=0;$i<52;$i++){
        $rand = mt_rand($i,51);
        //陣列 隨機數交換下標
        if($poker[$i]== $i){
            $poker[$i]= $poker[$rand];
            $poker[$rand]= $i;
        }
    }

    foreach ($poker as $value){
        echo $value . '<br>';
    }