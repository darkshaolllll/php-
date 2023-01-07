<?php
$p_languages=array('perl','php');
$p_languages=array_merge($p_languages,array('python'));
print_r($p_languages);
//同名键覆盖并且索引重排
$string=join(',',$p_languages);
print "$string\n";
$string='';
foreach($p_languages as $key=>$value)
{
    $string.=",$value";

}

$string=substr($string,1);//如果未填end该函数将返回从start到结尾的所有制
print "$string";
?>