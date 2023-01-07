<?php
function &pc_array_value($needle,&$hayastck)//返回变量的引用需在函数这里加一个引用符
{
    foreach($hayastck as $key => $value){
        if($needle==$value)
        {
            return $hayastck[$key];
        }
    }
}

?>