<?php

$a = [] ;

$a[] = 1;
$a[] = 'brad' ;
$a[] = true ;
$a[] = 12.3;

var_dump($a);  //呈現array所有內容   
                //array(4) { [0]=> int(1) [1]=> string(4) "brad" [2]=> bool(true) [3]=> float(12.3) }
echo count($a) .'<br>' ;    //4


$a[10] = 12 ;  
$a[1] = 'Brad';
var_dump($a);   //直接跳過4-9的陣列
         //array(5) { [0]=> int(1) [1]=> string(4) "Brad" [2]=> bool(true) [3]=> float(12.3) [10]=> int(12) }
$a[] =123 ;
var_dump($a);   //從11開始產生陣列
        //array(6) { [0]=> int(1) [1]=> string(4) "Brad" [2]=> bool(true) [3]=> float(12.3) [10]=> int(12) [11]=> int(123) }


echo '<hr>';

$b = array( 1,2,17 => 3,4,5);
var_dump($b);   //17為陣列位置，從17的位置開始補
    //array(5) { [0]=> int(1) [1]=> int(2) [17]=> int(3) [18]=> int(4) [19]=> int(5) }


echo '<hr>';

$c = array(1,2,3,7=>4,5,6,'brad',12.3);  
foreach ($c as $value) { //會跳過空的陣列
    echo $value ;  //123456brad12.3
}

foreach ($c as $key => $value) { //會跳過空的陣列
    echo $key .'=>' . $value .'<br>';  
}
// 1=>2
// 2=>3
// 7=>4
// 8=>5
// 9=>6
// 10=>brad
// 11=>12.3


echo '<hr>';

//陣列命名

$d['name'] = 'brad';
$d['age'] = 18 ;
$d['weight'] = 90 ;

foreach ($d as $key => $value) { //會跳過空的陣列
    echo $key .' : ' . $value .'<br>';  
}







