<?php
print 'the comment was:';
print htmlspecialchars($_POST['comment']);//会对字符进行转义，防止跨站脚本攻击
?>