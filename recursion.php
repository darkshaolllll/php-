<?php
$user_1=array('name'=>'max bia'
,'user'=>'max');
$user_1=array('name'=>'leo bloom'
,'user'=>'leo');
$user_1['friend']=&$user_2;
$user_2['friend']=&$user_1;
$user_1['job']='kk';
$user_1['job']='ss';
var_dump($user_1);
?>