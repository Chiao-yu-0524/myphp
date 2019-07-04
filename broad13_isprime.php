<table border="1" width="100%">
    <?php
            //質數
            $row = 10 ; //欄
            $ntd = 10 ; //列

                for ( $k = 0 ; $k < $row ; $k++){  
                    echo '<tr>';  //畫列
                    $i = 0;
                    for ($j = 1 ; $j <= $ntd ; $j++){ 
                        $newj = $j + $k * $ntd; //依照列數去判斷Ｊ的起始值
                        
                        $num = 0 ;
                        for ($i = $newj ; $i<= 100 ; $i++) {
                            $num = 0 ;
                            for ($r = 2 ; $r < $i ; $r++) {
                                if ( $i % $r == 0  ) $num++;
                            }
                        
                            if ($num == 0 ){
                                echo "<td bgcolor='yellow'>"; //畫欄
                                echo $i;
                            }else{
                                echo "<td style='color:black'>";
                                echo $i;              
                            }
                        if ($i = 100 ) break;
                        }
                        echo "</td>";
                        
                    }
                    echo "</tr>";
                }
    ?>
</table>