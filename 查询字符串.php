<?php
$var=array(
    'name'=>'ooo',
    'color'=>'green',
    'favorite_punctuation'=>'#'
);
$query_string=http_build_query($var);
$url='/muppet/select.php?'.$query_string;
$url='/muppet/select.php?'.htmlentities($query_string);
print $url;
?>