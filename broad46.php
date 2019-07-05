<?php   //61
// include_once 'MyClass1';
// include_once 'MyClass1';
spl_autoload_register(function($class_name){
    require_once "{$class_name}.php";   //此模式一定需要檔名跟類別內容名稱要一樣
} ) ;//跟上面兩行是一樣的意思

    $obj1 = new MyClass1;
    $obj2 = new MyClass2;
    $obj1->showMe();
    $obj2->showMe();
    $c1 = new Cart;
    $c1->addProduct('P001', 30);
    $c1->addProduct('P002', 2);
    $myList = $c1->getList();
    var_dump($myList);
?>