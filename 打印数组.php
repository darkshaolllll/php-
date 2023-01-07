<?php
switch(count($array)){
    case 0:
        return '';
    case 1:
        return reset($array);
    case 2:
        return join(' and ',$arrary);
    default:
        $last=array_pop($arrary);
        return join(', ',$arrary).",and $last";
}

?>