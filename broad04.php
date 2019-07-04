<?php 
    $result = $x = $y  = '' ; 
    if (isset($_GET['x'])) {   //確認有x的值，有值才會往下走
        $x = $_GET['x'] ;
        $y = $_GET['y'] ;
        $int = (int)($x / $y );  //取整數
        $mod = $x % $y ;
        $result = "{$int} ...... {$mod}";
    }
?>

<form action="broad04.php">  <!-- 呼叫程式進行計算 -->
<input name="x" value="<?php echo $x ; ?>">
/ 
 <input name="y" value="<?php echo $y ; ?>">
<input type="submit" value="=">
<?php 
    echo $result;  //一開始就有給值，所以result就不會特別確認是否有值
?>
</form>


