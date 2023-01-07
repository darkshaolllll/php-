<?
$array=array(213,21,223,3,4,1,2);
$largest=max($array);//可以找到最大值，但是无法返回该元素的索引
print "$largest";
$copy=$array;
arsort($copy);//可以通过重新排序获得索引
?>