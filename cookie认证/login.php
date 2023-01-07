<meta charset="utf=-8">
<?php
if(isset($_POST['userSubmit'])){
    if(isset($_POST['userName'])&& $_POST['userName']=="DuZZ"
    &&isset($_POST['userPassword'])&& $_POST['userPassword']==123456)
    
    
    {
        if(setcookie("name","DuZZ")){//设置cookie但返回值为bool类型
            echo "登陆成功，<a href='./index.php'>返回首页</a>";
        }
        else{
            echo "设置cookie错误";
        }
    }
    else{
        echo "用户名或密码错误，<a href='./login.php'>请重新登录</a>";
    }
}
else{
$_html=<<<HTML
<h1>用户登录</h1>
<form
    action=""
    method="post"
>
    用户名：<input type="text" name="userName"><br/>
    密码：<input type="password" name="userPassword"><br/>
    <input type="submit" name="userSubmit" value="登录"><br/>

</form>
HTML;//php当中用html的代码
//input 传参是post方式，type即为他们在post当中的键
echo $_html;
}
?>
