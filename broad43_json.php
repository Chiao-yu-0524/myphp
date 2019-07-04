<?php
//** 使資料庫內的所有表單轉成json */
$mysqli = new mysqli('localhost','root','','CY');
$mysqli->set_charset('utf8');

$sql = 'SELECT * FROM cust';  
$stmt= $mysqli->prepare($sql);   
$stmt->execute(); 
$stmt->store_result();  //儲存結果
echo $stmt->num_rows .'<br>';
$stmt->bind_result($id,$cname,$tel,$birthday); 

$ret = new stdClass;   //物件
if ($stmt->num_rows>0){   //如果有資料的話
    $ret->result = $stmt->num_rows;
    $row = []; 

    while ($stmt->fetch()){    //抓全部的資料表內容
       //echo "{$id} : {$cname} : {$tel} : {$birthday} <br>";
       $row['id'] = $id;
       $row['cname'] = $cname;
       $row['tel'] = $tel;
       $row['birthday'] = $birthday;
    
        $ret->data[]=$row;   //沒有該屬性會直接新增
    }

}else{
    $ret->result = 'no data';   
}

$stmt->free_result();   //釋放記憶體
$stmt->close();   //關閉資料

echo json_encode($ret);   //打包成json

?>