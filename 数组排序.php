<?php
$states=array(651,552,544,9634,SORT_NUMERIC);//升序排列,按数字缺了就补上
sort($states);
var_dump($states);//按照字母顺序排的
function natrsort($a,$b)
{
    return strnatcmp($b,$a);//反自然排序
}
$tests=array('test.php','test10.php','test11.php','test2.php');
usort($tests,'natrsort');
print_r($tests);
?>