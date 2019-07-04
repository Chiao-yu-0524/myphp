<?php
//非利用array的方式做，骰子出現的次數
$a1 = $a2 = $a3 = $a4 = $a5 = $a6 = 0;
for ( $i = 0 ;$i < 100 ; $i++){
        $j = rand(1,6);
        switch ($j){
                case 1 : $a1++ ; break ;
                case 2 : $a2++ ; break ;
                case 3 : $a3++ ; break ;
                case 4 : $a4++ ; break ;
                case 5 : $a5++ ; break ;
                case 6 : $a6++ ; break ;
        }
};

echo "1 點出現 {$a1} 次" .'<br>';
echo "2 點出現 {$a2} 次" .'<br>';
echo "3 點出現 {$a3} 次" .'<br>';
echo "4 點出現 {$a4} 次" .'<br>';
echo "5 點出現 {$a5} 次" .'<br>';
echo "6 點出現 {$a6} 次" .'<br>';
