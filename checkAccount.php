<?php

//圖形驗證器
//會員註冊登入機制

include_once 'sql.php';
spl_autoload_register(function($class_name){ //此模式一定需要檔名跟類別內容名稱要一樣
    require_once "{$class_name}.php";
});
session_start();
if (!isset($_REQUEST['account'])) header('Location: login.php');
$account = $_REQUEST['account']; $passwd = $_REQUEST['passwd']; 
$sql = 'select * from member where account = ?';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $account);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0){
    // check password, now
    $member = $result->fetch_object();
    if (password_verify($passwd, $member->passwd)){
        // OK
        $_SESSION['member'] = $member;
        $_SESSION['cart'] = new Cart;
        header("Location: main.php");
    }else{
        // xx
        header("Location: login.php");
    }
}else{
    // no account
    header("Location: login.php");
}
?>