<?php

?>

<table border='1' width='100%'>
    <?php
    define("ROWS" , 5);//五列
    define("FROM" , 2);//起始值
    define("TO" , 6);//結束值

    for ($k = 0 ; $k < ROWS ; $k++){
            echo '<tr>';
                for ($i = FROM ; $i <= TO ; $i ++){
                   
                    $newi = $i + (TO - FROM+1) * $k;
                    $a = $newi % 2;
                    if ( $a == 0 ){
                        $ispink= 'pink';
                    }else{
                        $ispink= 'yellow';
                    }
                    echo "<td bgcolor=$ispink>";
                    for ($j = 1  ; $j <= 9 ; $j++){
                        $num = $newi * $j ;
                        echo $newi .'x' .$j. '=' .$num .'<br>';
                    }
                    echo '</td>';
                }
        echo '</tr>';
    }
    ?>


</table>

