<?php
session_start();
//$_SESSION["checkNum"] = rand(1,9999);
$rand = rand(1,9999);

$num = $_REQUEST['num'];
echo 'OK';

function isSubmit(){
    
}


?>

<h1>Brad Big Company</h1>
<hr>   <!--呼叫圖片-->
<form method='post' action="homework_GD.php" >
Picture : <img src='homework_img.php?rand=<?php echo $rand; ?>'/><br>
Number : <input type="number" name="num" id="num/> <br>
<input type="submit" value="Register" onclick="return isSubmit();"  />

</form>