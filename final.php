<?php
 class posen{
public $name=332;
public final function show(){   //最终方法
   echo __CLASS__;
}
}

class man extends posen{      //运行后 致命的错误，无法从final类继承

   public function show(){
      echo "我能重写这个方法吗？";
   }
}

$s=new man();
$s->show();    //错误不能重写final的方法  致命的错误

?>