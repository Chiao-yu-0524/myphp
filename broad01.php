<h1> Brad Big Company<h1>
<hr/>
<!--   -->
<?php

//單行註解

/*
區塊註解
*/
$var1 = 1 ;
echo gettype($var1) . '<br>' ;   //整數
$var1 = 'Bard' ;
echo gettype($var1) . '<br>' ;   //字串
$var1 = true ;
echo gettype($var1) . '<br>' ;   //布林
$var1 = 12.3 ;
echo gettype($var1) . '<br>' ;   //浮點數

$var1 = 10 ; $var2 = 3 ;
$var3 = $var1 / $var2 ;  //3.33333
echo (int)($var3) . '<br>' ; // 浮點轉整數
$var4 = $var1 % $var2 ;   //取餘數
echo $var4. '<br>' ;
$var5 = 012 ;    //以零開頭的數值  >八進位的寫法
echo $var5 . '<br>' ;  //10
$var6 = 0X12 ;    //以零開頭的數值  >十進位的寫法
echo $var6 . '<br>' ;  //10

$var7 = 10 ;
$var8 = $var7++ ; //10，7已變成11 
$var9 = ++$var7 ; //12，7已變成11+1
echo "{$var7} : {$var8} : {$var9} <br>" ;  //12:10:12  (一定要用爽引號才能帶變數)



?>