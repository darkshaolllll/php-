<?php
if(is_numeric(5))
{
    echo'是数字';
}
if(is_numeric('five'))
{
    print '是数字';

}
else
{
    print 'bushi';
}
$number="5,000";
$number=str_replace(',','',$number);
if(is_numeric($number))
{
    print '是数字';

}
else
{
    print 'bushi';
}
?>
<!-- is_numeric()函数会自动分辨值的进制和类型，只要是数字就会输出true -->
<!-- str_replace(',','',$number)的正确用法 -->