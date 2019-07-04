<?php
//** 查詢資料 */
$mysqli = new mysqli('localhost','root','','CY');
$mysqli->set_charset('utf8');

$sql = 'SELECT * FROM cust';  
$stmt= $mysqli->prepare($sql);   
$stmt->execute(); 
$stmt->store_result();  //儲存結果
echo $stmt->num_rows .'<br>';
$stmt->bind_result($id,$cname,$tel,$birthday); 

while ($stmt->fetch()){    //抓全部的資料表內容
    echo "{$id} : {$cname} : {$tel} : {$birthday} <br>";
}



?>