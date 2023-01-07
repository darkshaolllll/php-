<?php
function eat_fruit()
{
    global $chew_count;//创建与赋值要分开
    $chew_count=122;
    global $which;
    $which='age';
    $age=1223;
}
eat_fruit();//必须得调用一下函数才会创建该变量
$i=$chew_count;
print($i);

global $$which;
$food='pizza';
$drink ='beer';
function party(){
    global $food,$drink;
    unset($food);
    unset($GLOBALS['drink']);
}
print("$food:$drink\n");
party();
print("$food:$drink\n");//drink已经被全局删除了
?>