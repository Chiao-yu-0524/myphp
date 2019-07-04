<?php
$i = 0 ;
for (printBrad() ; $i <10 ; printLine()){
    echo "{$i}<br>";
    $i++ ;
}

function printBrad(){
    echo 'Bard<br>';
}

function printLine(){
    echo '<hr>';
}

