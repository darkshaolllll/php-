<?php
function warp_html_tag($string,$tag='i')
{
    return "<$tag>$string</$tag>";
}
print (warp_html_tag("sss"));
?>