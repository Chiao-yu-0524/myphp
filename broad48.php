<?php   //63


//$ch = curl_init("https://www.bradchao.com/apptest/posttest1.php");
$ch = curl_init("http://192.168.64.2/myphp/broad50.php");

$dataString = "id=1";
cur1_setopt($ch ,CURLOPT_CUSTOMREQUEST,"POST");
cur1_setopt($ch ,CURLOPT_RETURNTRANSFER,true);
cur1_setopt($ch ,CURLOPT_POSTFIELDS ,$dataString);

$ret = curl_exec($ch);
curl_close($ch);

$ret = json_decode($ret);
if ($ret->code == '200'){
    echo $ret->product->pname .":".$ret->product->price;
}


