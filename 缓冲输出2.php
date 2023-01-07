<?php 
function mangle_email($s){
    return preg_grep('/([^@\s]+)@([-a-z0-9]+\.)+[a-z]{2,}/is',
    '<$1@...>',
    $s);
}
ob_start('mangle_email');
?>
i would not like spam sent to ronald@example.com!
<?php ob_end_flush();?>