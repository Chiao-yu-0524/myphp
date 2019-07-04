
<?php 
//    西元年份除以4可整除，且除以100不可整除，為閏年。
//    西元年份除以400可整除，為閏年。
//    西元年份除以100可整除，且除以400不可整除，為平年

   //$year = $_GET['year'] ;
   $result = $year = '' ;
   if (isset($_GET['year'])) {
        $year = $_GET['year'];
        if ( $year % 4 == 0 && $year % 100 > 0 ) {
            $result = $year . '為閏年';
        }else if ( $year % 400 == 0 ) {
            $result = $year .'為閏年';
        }else {
            $result = $year .'不為閏年';
        }
   }


?>

<form action="broad06year.php">  <!-- 呼叫程式進行計算 -->
<input name="year" value="<?php echo $year ; ?>">
<input type="submit" >
</form>
<?php 
    echo $result;  //一開始就有給值，所以result就不會特別確認是否有值
?>


