<?php
    include_once 'call.php';
    $twid = createTWId();
    echo $twid .'<br>';
    if (isTWId($twid)){
        echo 'OK';
    }else{
        echo 'XX';
    }
?>