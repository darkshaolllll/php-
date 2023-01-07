<meta charset="utf-8">
<h1>cookie应用案例</h1>
<?php
if(isset($_COOKIE['name'])){
    echo "欢迎您,{$_COOKIE['name']},请开始检测";
    echo "<br/>";
    echo "<a href='./logout.php'>请注销</a>";
}
else{
    echo "<a href='./login.php'>请登录</a>";
}
?>