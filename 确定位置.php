<?php
//$position=array_search($value,$array);
//if($position!=false)//$position的值就是$value在该数组中的值
//{
//}
$favorite_food=array(1=>'artichockes','bread','cauliflower','deviled eggs');
$food='cauliflower';
$position=array_search($food,$favorite_food);
if($position!==false){//用!==是为了防止键值等于0时导致的错误
    echo "my $position favorite food is $food";
}else
{
    echo "blech i hate $food";
}
//x < 0 ? y = 10 : z = 20;该表达式执行以下操作
// if (x < 0)
//     y = 10；
// else
//     z = 20;
function test_odd($var)
{
return($var & 1);
}

$a1=array("a","b",2,3,4);
print_r(array_filter($a1,"test_odd"));//第一个参数传入一个数组，第二个参数设定一个判别函数
?>