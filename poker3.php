<?php
    //poker洗牌

    $poker = range(0,51);
    shuffle($poker);   //產生不重複的牌

    echo '<hr>';

    $players = array([],[],[],[]);
    foreach($poker as $i => $card){
        $players[$i%4][(int)($i/4)] = $card; //發牌
    }
    
?>

<table border="1" witdth ="100%">
        <?php
        $suits = array("&spades;","<font color='red'>&hearts;","<font color='red'>&diams;","&clubs;");
        $values =array('A',1,2,3,4,5,6,7,8,9,10,'J','Q','K');
        foreach($players as $play){
            sort($players)    ;  //理牌
            echo "<tr>";
            foreach($play as $card ){
                echo "<td>";
                echo "{$suits[(int)($card/13)]}{$values[$card%13]}" ;
                echo "</td>";
            }
            echo "</tr>";
        }
            

        ?>
</table>