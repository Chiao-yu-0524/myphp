<?php

//
sayYa();    //Ya
sayYa();    //Ya
echo '<hr>';
sayHello('brad');   //hello , brad
sayHello('tomy');   //hello , tomy
echo '<hr>';
sayHelloV2();    //hello , world
sayHelloV2('tomy');    //hello , tomy
echo '<hr>';
sayHelloV3(2);    //hello , Bard     hello , Bard   打招呼兩次
sayHelloV3('brad');    //空，回傳'brad'到$n裡面，故不能比較所以沒有顯示
echo '<hr>';
sayHelloV4();     //hello , world
sayHelloV4('brad');     //hello , brad
sayHelloV4(2);   //hello , 2
echo '<hr>';
sayHelloV5(); //空
sayHelloV5('brad'); //hello , brad
sayHelloV5(1,2,3);  //hello , 1   hello , 2   hello , 3


function sayYa(){
    echo 'Ya<br>';
}

function sayHello($name){
    echo "hello , $name<br>";
}

function sayHelloV2($name = 'world' ){   //預設值為world
    echo "hello , $name<br>";
}

function sayHelloV3($n = 1 , $name ='Bard' ){   //預設值為world
    for ($i=0;$i<$n ; $i++) {
        echo "hello , $name<br>";
    }
}

function sayHelloV4($names ='world' ){  
    
    if(is_array($names)){
        foreach($names as $name){
            echo "hello , {$names}<br>";
        }
    }else {
        echo "hello , {$names}<br>";
    }
}

function sayHelloV5(){  
    $names = func_get_args();
    foreach($names as $name){
        echo "hello , {$name}<br>";
    }
}
