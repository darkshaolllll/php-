<?php

use person as GlobalPerson;

class person{
    private $__data=array();
    public function __get($name)
    {
        if(isset($this->__data[$name]))
        {
            return $this->__data[$name];
        }
        else{
            return false;
        }
    }
    public function __set($name, $value)#更为高级的访问器
    {
        $this->__data[$name]=$value;
    }
}
$wood=new person;
$wood->email='555';
print $wood->email;

?>