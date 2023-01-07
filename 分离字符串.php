<?php
$match="3+2/7-9";
$stack=preg_split('/ *([+\-\/*]) */',$match,-1,PREG_SPLIT_DELIM_CAPTURE);
print_r($stack);
?>