<!-- 設計物件(以物件的屬性下去寫) -->

<?php

class Bike{  //設計物件
    protected $speed = 0;   //屬性    
    function upSpeed(){
        $this->speed = $this->speed<1 ? 1 : $this->speed*2;
    }
    function downSpeed(){
        $this->speed = $this->speed<1 ? 0 : $this->speed*0.5;
    }
//**   封裝屬性   */
    function getSpeed(){   
        return $this->speed;
    }
}

//Scooter繼承Bike的屬性
class Scooter extends Bike{    
    // function upSpeed(){   //蓋過原本的功能
    //     parent::upSpeed();   //直接繼承父的程式
    // }
    function chGear($gear){
        $this->gear = $gear;
    }
    function upSpeed2(){   //蓋過原本的功能
        $this->speed = $this->speed<1 ? 1 : $this->speed*2;
    }
    function getSpeed(){   
        return $this->speed;
    }
}

class person{
    private $mybike;   //a Bikce objent
    private $myStooter;
    private $myNane;

    function __construct($name){   //建構式架構，創建時會被呼叫
        echo 'ok';
        $this->mybike = new Bike ;
        $this->myStooter = new Scooter ;
        $this->myName = $name;
    }

    function __destruct(){
        
    }
}

$b1 = new Bike ;  // 產生物件
$b2 = new Bike ;
// $b1->upSpeed();$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();  // 1>2>4>8>16
// $b1->downSpeed();  //8
// $b2->upSpeed();$b2->upSpeed();$b2->upSpeed();   //1>2>4

// 加速到10以上
// for ($i = 1 ; $b1->getSpeed() <= 10 ; $i++){   
//     $b1->upSpeed();
// }
// echo $b1->getSpeed() .'<br>';  

$s1 = new Scooter;
$s1->chGear(4);
$s1->upSpeed2();
echo $s1->getSpeed() .'<br>';
$s1->upSpeed2();
echo $s1->getSpeed() .'<br>';
$s1->upSpeed2();
echo $s1->getSpeed() .'<br>';
$s1->upSpeed2();
echo $s1->getSpeed() .'<br>';
echo '<hr>';

$p1 = new person;
echo $p1('brad');