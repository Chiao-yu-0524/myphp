<?php

//利用array的方式做，骰子出現的次數，大的點數機率是小的點數的機率兩倍
$a = array(1=>0,0,0,0,0,0);

for ( $i = 0 ;$i < 1000 ; $i++){
        $j = rand(1,9);
        $a[$j>6?$j-3:$j]++;
};
echo '<hr>';
foreach ($a as  $key =>$value) { //會跳過空的陣列
        echo "{$key} 點出現 {$value} 次" .'<br>';
}

