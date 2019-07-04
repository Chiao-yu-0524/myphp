<?php
$a = rand(1,12);
$b = 1;

if ($a == 1 || $a ==3 || $a ==5 || $a ==7 || $a ==8 || $a ==10) $b = 1;
if ($a ==4 || $a ==6 || $a ==9 || $a ==11) $b = 2;
if ($a ==2 ) $b = 3 ;

switch ($b){    
    case 1:
        echo $a .'月有 ' . '31天'.'<br>';
        break;
    case 2:
        echo $a .'月有 ' . '30天'.'<br>';
        break;
    default:
        echo $a .'月有 ' . '28天'.'<br>';
}

echo '<hr>';