
<?php
$result = 0;
$num ='';
if (isset($_GET['n'])){
    $num = $_GET['n'];
    $i = 1 ;
    while ($i <= $num ){  //確認完才做下面動作
        $result = $result + $i ;
        $i++;

    }
}

?>

<form action=broad14_while.php>
1 + 2 + ... +
<input type="number" name="n" value=<?php echo $num; ?>>
<input type="submit" name="=">
<?php 
    echo $result;  //一開始就有給值，所以result就不會特別確認是否有值
?>
</form>
