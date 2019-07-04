<?php
$a = 10 ;
switch ($a){   //B
    case 1:
        echo 'A';
        break;
    case 10:
        echo 'B';
        break;
    case 100:
        echo 'C';
        break;
   default:
        echo 'D';
}

echo '<hr>';

$a = 10 ; $b = 8;   
switch ($a){     //C
    case 1: case 2: case 3:
        echo 'A';
        break;
    case 100:
        echo 'B';
        break;
    case $b +2 :
        echo 'C';
        break;
   default:
        echo 'D';
}

echo '<hr>';


