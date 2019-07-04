<?php   //broad21.php有用到


foreach($_REQUEST as $k => $v){ 
      //$_GET及$_POST皆可收
        if (is_array($v)){
            foreach($v as $k => $v){ 
                echo "{$k} : {$v} <br>";
            }
        }else{
            echo "{$k} => {$v} <br>";
        }
    
}

function isTWId($id){    //broad22_TWID.php有用到
    $rat = false;
    if(preg_match("/^[A-Z][12][0-9]{8}$/", $id )){ //正規化
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO'; 

        $c1 = substr($id ,0,1);  //身分證第一碼
        $n12 = strpos($letters ,$c1)+10 ;
        
        $n1 = (int)($n12 /10);
        $n2 = $n12 % 10;

        $n3 =substr($id ,1,1);
        $n4 =substr($id ,2,1);
        $n5 =substr($id ,3,1);
        $n6 =substr($id ,4,1);
        $n7 =substr($id ,5,1);
        $n8 =substr($id ,6,1);
        $n9 =substr($id ,7,1);
        $n10 =substr($id ,8,1); 
        $n11 =substr($id ,9,1);

        $sum = $n1 *1 + $n2 *9 + $n3 *8 + $n4 *7 + $n5 *6 + $n6 *5 + $n7 *4 + $n8 *3 + $n9 *2 + $n10 *1 + $n11 *1;
        $rat = $sum %10 == 0;
    }
    return $rat;
}



function createTWId($isMale = false) : string{   //broad22_TWID.php有用到
    $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO'; 
    $id = substr($letters,rand(0,25),1);
    $id .=$isMale?'1':'2';
    for ($i=0;$i <7 ; $i++) $id .= rand(0,9);
    for ($i=0;$i<=9;$i++){
        if (isTWId($id . $i)){
            $id .= $i ;
            break;
        }
    }
    return $id;
}

?>


<?php   //broad28.php有用到

if( !isset($_REQUEST['filename'])) die("Get out !");
$filename = $_REQUEST['filename'];
$content = $_REQUEST['content'];

$fp = @fopen('./dir1/{$filename}','w');
if (@fwrite($fp ,$content)){
    header("Location: dir1/{$filename}");  //前面不可以有輸出的內容
}else{
    echo "write error!";
}


?>


<?php
if( !isset($_FILES['upload'])) exit("Get out !");
$upload = $_FILES['upload'];
// if ($upload['error'] == 0 ){   //php舊版的處理方式
//     if (copy($upload['tmp_name'] , "upload/{$upload['name']} " ) ) {
//         echo 'Upload Success';
//     }else{
//         echo 'Upload Failure';
//     }
// }else{
//     echo 'Ooop!';
// }

if (is_uploaded_file($upload['tmp_name'])){   //php新版的處理方式
    if (move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")){
        echo 'Upload Success';
    }else{
        echo 'Upload Failure';
    }
}else{
echo 'Ooop!';
}

?>

<?php

class Student {
    private $ch ,$eng ,$math;
    public function __construct($ch , $eng ,$math) {
        echo 'ok';
        $this->ch = $ch;
        $this->eng = $eng ;
        $this->math = $math;
    }  
    public function sum(){
        return $this->ch+$this->eng +$this->math ;
    }
    public function avg(){
        return $this->sum()/3;
    }
    public function setch($newch){
        $this->ch = $newch;
    }
}

?>
