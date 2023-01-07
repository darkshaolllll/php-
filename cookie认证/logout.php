<meta charset="utf-8">
<?php
setcookie("name",$_COOKIE['name'],time()-3600);//通过设置cookie的方式来注销cookie
echo "注销成功,<a href='./index.php'>返回首页</a>";
?>
