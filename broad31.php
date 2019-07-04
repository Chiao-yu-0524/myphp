<?php
if( !isset($_FILES['upload'])) exit(0);
$upload = $_FILES('upload');
foreach($upload['error'] as $key => $vlaue){
    if ($vlaue == 0 ){
        if(is_uploaded_file($upload['tmp_name'][$key])){
            if (move_uploaded_file($upload['tmp_name'][$key] , "dir1/{$upload['tmp_name'][$key]}")){
                echo "{$upload['tmp_name'][$key]}   upload success!"; 
            }else{
                echo "{$upload['tmp_name'][$key]}   upload filaure!";
            }
        }
    }
}
?>
