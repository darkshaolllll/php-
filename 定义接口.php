<?php
interface nameable{#不仅要定义连参数等都要相同
    public function setname($name);
    public function getname();
}
class book implements nameable{
    private $name;
    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        return $this->name=$name;
    }
}
$interfaces= class_implements('book');#检查nameable中定义的接口是否被实现
if(isset($interfaces['nameable']))
?>
