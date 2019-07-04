<?php 
    $result = $x = $y ='' ; 
    if (isset($_GET['x'])) {   //確認有x的值，有值才會往下走
        $x = $_GET['x'] ;
        $y = $_GET['y'] ;
        $result = $x +$y ;
        //echo "{$x} + {$y} = {$result} ";  
    }
?>

<form action="broad03.php">  <!-- 呼叫程式進行計算 -->
<input name="x" value="<?php echo $x ; ?>">
+ 
 <input name="y" value="<?php echo $y ; ?>">
<input type="submit" value="=">
<?php 
    echo "{$result} ";  //一開始就有給值，所以result就不會特別確認是否有值
?>
</form>


