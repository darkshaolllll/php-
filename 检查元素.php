<?php
$book_collection=array('emy','pride','pp');
$book='send and sen';
if(in_array($book,$book_collection)){
    echo 'own it';

}
else{
    echo 'need it';
}
$array=array(1,'2','three');//three与0比较时以为其不是数字字符串所以会被转化成0因而与0相等，'2'作为数字字符串在与2比较时会被转化成整数类型因此相同
//鉴于上述情况严格匹配尤为重要

in_array(0,$array);//true
in_array(0,$array,true);//false
in_array(1,$array);//ture
in_array(1,$array,true);//true
in_array(2,$array);//true
in_array(2,$array,true);//false
//不加true实行==的判断只需要相等即可
$book_collection=array_flip($book_collection);//array_flip()该函数会将数组的键和值反转
$book='sense and sense';
if(isset($book_collection[$book]))//isset()函数判断参数是否全部被设置且不为空
{
    print 'own it';
}
else{
    print 'need it';
}
?>