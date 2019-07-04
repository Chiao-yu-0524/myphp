<?php 
    $score = rand(0,100) ;
    echo $score .'<br>';
    if ($score >= 90 ){
        echo 'great';
    }else if($score >=80){
        echo 'good';
    }else if ($score >=60) {
        echo 'not bad';
    }else{
        echo 'down';
    };

    

?>


