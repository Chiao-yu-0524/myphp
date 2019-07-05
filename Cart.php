<?php
class Cart{   //購物車
    private $list ;  // $list => array , $list['product id ] = quantity

    function __construct(){
        $this->list = array();
    }

    //提供方法操作
    function addProduct($pid,$qty){   //新增商品

    }

    function modifyProduct($pid,$qty){   //修改商品
        
    }

    function removeProduct($pid){   //刪除商品
        
    }

    function clearAll(){   //清除商品
        
    }

    function getAll(){   //全買商品
        
    }

    function getItemQty($pid){   //全買商品
        
    }


}