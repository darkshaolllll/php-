<?php
function time_parts($time)
{
    return explode(':',$time);
}
list(,$minute,)=time_parts("12:22:34");//虽然看起来是错的，只是忽略了左右两个变量
//可以在$minute左右加两个问好这样就可以指定元素
print($minute);
?>
