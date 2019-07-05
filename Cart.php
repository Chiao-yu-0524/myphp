<?php
class Cart{   //購物車
    private $list ;  // $list => array , $list['product id ] = quantity

    function __construct(){
        $this->list = array();
    }

    //提供方法操作
    
    function addProduct($pid,$qty){   //新增商品
        if (!key_exists($pid,$this->list)){   //判斷是否有存在,不存在就新增
            $this->list[$pid] = $qty;
        }
    }

    function modifyProduct($pid,$qty){   //修改商品
        if (key_exists($pid,$this->list)){   //判斷是否有存在,存在就修改
            $this->list[$pid] = $qty;
        }
    }

    function removeProduct($pid){   //刪除商品
        if (key_exists($pid,$this->list)){   //判斷是否有存在,存在就刪除
            unset($this->list[$pid]); 
        }
    }

    function clearAll(){   //清除商品
        $this->list = array();
    }

    function getList(){   //全買商品
        return $this->list;
    }

    function getItemQty($pid){   //全買商品
        $ret = -1;
        if (!key_exists($pid,$this->list)){   //判斷是否有存在
            $ret = $this->list[$pid];
        }
        return $ret ;
    }


}