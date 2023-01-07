<?php
if(!(isset($_POST['flavor'])&&strlen($_POST['flavor'])))//验证是否存在且为字符串
{
    print 'you must input your favorite ice cream flavor';
}
if(isset($_POST['choice'])&&(strlen($_POST['color']<=5)))//验证是否字节的长度是否大于5
{
    print 'color must be more than 5 characters.';
}
if(!(isset($_POST['choices'])&&is_array($_POST['choices'])))//验证是否为字符串
{
    print 'you must select some choces';
}
if(! ctype_digit($_POST['age']))
{
    print 'your age must be a number bigger than or equal to zero';
}
if($_POST['rating']!=strval(intval($_POST['rating'])))//先把rating转化为整数再转化为字符串对原来的ranting进行对比，因为$_POST返回的为string
{
    print 'your rating must be an integer';
}
//除了以上的几种方法还可以通过正则表达式的方式来进行判断但是速度会比较慢+
?>