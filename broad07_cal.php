<?php 
    $result = $x = $y = $mark = '' ; 
    if (isset($_GET['x'])) {   //確認有x的值，有值才會往下走
        $x = $_GET['x'] ;
        $y = $_GET['y'] ;
        $mark = $_GET['mark'];
        $result = $mark;

        if ($mark == 1 ){
            $result = $x + $y ;
        }else if ($mark == 2) {
            $result = $x - $y ;
        }else if ($mark == 3){
            $result = $x * $y ;
        }else{
            $int = (int)($x / $y );  //取整數
            $mod = $x % $y ;
            $result = "{$int} ...... {$mod}";
        }
        
    }
?>

<form action="broad07cal.php">  <!-- 呼叫程式進行計算 -->
<input name="x" value="<?php echo $x ; ?>">
<select name="mark" >
    <option value="1" <?php if ($mark == "1") echo 'selected'; ?>>+</option>
    <option value="2" <?php if ($mark == "2") echo 'selected'; ?>>-</option>
    <option value="3" <?php if ($mark == "3") echo 'selected'; ?>>x</option>
    <option value="4" <?php if ($mark == "4") echo 'selected'; ?>>/</option>
</select>
 <input name="y" value="<?php echo $y ; ?>">
<input type="submit" value="=">
<?php 
    echo $result;  //一開始就有給值，所以result就不會特別確認是否有值
?>
</form>
