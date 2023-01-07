<?php
function mean($number)
{
    $sum=0;
    $size=count($number);
    for($i=0;$i<$size;$i++)
    {
        $sum+=$number[$i];
    }
}
?>