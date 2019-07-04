<?php
//利用array的方式做，骰子出現的次數
$a = array(1=>0,0,0,0,0,0);

for ( $i = 0 ;$i < 1000 ; $i++){
        $j = rand(1,6);
        $a[$j]++;
};

for ($i = 1 ; $i <= 6 ; $i++){
        echo "{$i} 點出現 {$a[$i]} 次" .'<br>';
}

echo '<hr>';

foreach ($a as  $key =>$value) { //會跳過空的陣列
        echo "{$key} 點出現 {$value} 次" .'<br>';
}

