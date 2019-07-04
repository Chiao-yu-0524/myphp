<?php

$mysqli = new mysqli('localhost','root','','CY');



$mysqli->set_charset('utf8');

/** sql語法(新增) */
    // $sql = 'INSERT INTO cust (cname,tel,birthday) VALUE ("brad","123","1999-01-02")';
    // $sql .= ', ("tom","1456","1999-01-04")';   //可接續
    // $stmt= $mysqli->prepare($sql);    //預先準備sql與法
/** sql語法(更新) */
    //$sql ='UPDATE cust set cname = "Tony" where id = 7';
/** sql語法(刪除) */
    //$sql ='Delete from cust where id = 5';

    $cname ='kevin';
    $tel = '0912-123123';
    $birthday = '1990-03-04';
/** sql語法(指定變數給予) */
    $sql = 'INSERT INTO cust (cname,tel,birthday) VALUE (?,?,?)';



$stmt= $mysqli->prepare($sql);   
$stmt->bind_param('sss',$cname,$tel,$birthday);   //對應22列的三個?   (s為字串，有三個欄位故有三個s)
$stmt->execute(); 
echo $stmt->affected_rows;   //影響的列數
echo $mysqli->error; //是否有error
?>