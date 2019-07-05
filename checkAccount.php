<?php
include_once 'sql.php';
session_start();
if (!isset($_REQUEST['account'])) header('location:login.php');

$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];

$sql = 'SELECT * FROM member where account = ?';

$stmt= $mysqli->prepare($sql);   

$stmt->bind_param('s',$account);
$stmt->execute();

$result = $stmt->get_result();   
if ($result->num_rows >0) {   
    $member = $result->fetch_object();
    //var_dump($member);
    // have account
    if (password_verify($passwd,$$member->$passwd)){   
        
        $_SESSION['member'] = $member;
        header("Location:main.php");
    }else{
        hearder("Location:login.php");
    }

}else {
    // no account
    hearder("Location:login.php");

}

//圖形驗證器
//會員註冊登入機制