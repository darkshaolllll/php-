<?php
class format{
    public static function number($number,$decimals=2,$decimal='.',$thousands=','){
        return number_format($number,$decimals,$decimal,$thousands);
    }

}
print format::number(1234.567);//静态方法在不需要实例化的前提下就可以
//内部不能使用$this
?>