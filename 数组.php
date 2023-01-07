<?php
$presidents=array(1=>'washington','adams','jefferson','madison');
foreach($presidents as $number=>$presidents)
{
    print "$number:$presidents\n";
}
//$fruits=array('red'=>array('strawberry','apple'));
// $president= array(1=>'washington','adams','honest'=>'asda')
//键值给就是给的值不给总数加一，第一个键值可以设定为任意想要的数
$fruits['red'][]='str';
$fruits['red'][]='apple';
$fruits['yellow'][]='ban';
foreach($fruits as $color=>$color_fruits){
    foreach($color_fruits as $fruit){
        print "$fruit is color $color\n";
    }
//each操纵的是原始数组，而foreach操纵的是数组的一个副本
}
$arr1=array('asda',12312,455,66677,888);
unset($arr1[3]);//直接删除其余简直不变
//array_splice($arr1,0,2);//可自动将索引化为稠密
$arr1=array_values($arr1);//稠密
$arr1=array_pad($arr1,5,"");
var_dump($arr1);
?>