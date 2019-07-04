<h1> Brad Big Company<h1>
<hr/>
<!--   -->
<?php

$var1 = 'Bard' ; $var2 = 80 ;
echo '$var1 = $var2' . '<br>';   //$var1 = $var2 (字串)
echo "$var1 = $var2 <br>" ;      //Bard = 80 
echo "$var1 = $var2 kg  <br>" ;   //Bard = 80 kg
echo "{$var1} = {$var2} kg  <br>" ;   //Bard = 80 kg
echo $var1 . '=' . $var2 . '<br>' ;   //Bard=80

$var3 = '10' ; $var4 = '3' ;
$var5 = $var3 + $var4 ; //13
$var5 = $var3 . $var4 ; //103
$var6 = 'bard' ;
$var5 = $var6 + $var4 ; //3   var6當作0來相加
$var7 = '123bard' ;
$var8 = $var7 + $var4 ; //126   var8取前面數值後面不管
$var9 = '123bard123' ;
$var10 = $var9 + $var4 ; //126   var9取前面數值後面不管





?>