<?php
//**  */
//處理資料
function processData(){
    $data['title']= 'Brad Big Company';
    $data['who'] = 'brad';
    return $data;    
}


//呼叫畫面
function loadView($viewFile, $data){
    $query = http_build_query(array("data" => $data));
    echo file_get_contents("http://192.168.64.2/php/view/{$viewFile}.php?{$query}");
}

$data = processData();
loadView('view1',$data);

