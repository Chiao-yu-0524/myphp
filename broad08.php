<?php

$a = 10 ; $b = 3;
if ($a++ >= 10  && $b-- <= 3 ) {
    echo 'ok' .$a .'+' .$b ;  //ok 11+2
}else {
    echo 'XX' . $a .'+' .$b ;
}

echo '<hr>';

$a = 10 ; $b = 3;
if ($a++ > 10  && $b-- < 3 ) {
    echo 'ok' . $a .'+' .$b ;
}else {
    echo 'XX' .$a .'+' .$b ;  //xx 11+3
}

echo '<hr>';

$a = 10 ; $b = 3;
if ($a++ > 10  || $b-- < 3 ) {
    echo 'ok' . $a .'+' .$b ;
}else {
    echo 'XX' .$a .'+' .$b ;   //xx 11+2
}

echo '<hr>';

