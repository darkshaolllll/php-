<?php

header("content-type:text/html;charset=utf-8");

echo "我们将在3秒钟内重定向到PHP中文网！</br></br>"; 

     

// 该函数每3秒钟刷新一次页面

header("refresh: 3; url = https://www.baidu.com/"); //location好像不行,还必须加上refresh

exit; //https://blog.csdn.net/weixin_43508199/article/details/121396773?ops_request_misc=%257B%2522request%255Fid%2522%253A%2522166817821916782395318257%2522%252C%2522scm%2522%253A%252220140713.130102334..%2522%257D&request_id=166817821916782395318257&biz_id=0&utm_medium=distribute.pc_search_result.none-task-blog-2~all~top_click~default-1-121396773-null-null.142^v63^control,201^v3^control_1,213^v2^t3_esquery_v2&utm_term=php%20header&spm=1018.2226.3001.4187
1. 跳转页面


header('Location:'.$url);  //Location和":"之间无空格。

2. 声明content-type


header('content-type:text/html;charset=utf-8');

3. 返回response状态码


header('HTTP/1.1 404 Not Found');

4. 在某个时间后执行跳转


header('Refresh: 10; url=http://www.baidu.com/');  //10s后跳转。

5. 控制浏览器缓存





header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");

header("Cache-Control: no-cache, must-revalidate");

header("Pragma: no-cache");

6. . 执行http验证



header('HTTP/1.1 401 Unauthorized');

header('WWW-Authenticate: Basic realm="Top Secret"');

7. 执行下载操作





header('Content-Type: application/octet-stream'); //设置内容类型

header('Content-Disposition: attachment; filename="example.zip"'); //设置MIME用户作为附件

header('Content-Transfer-Encoding: binary'); //设置传输方式

header('Content-Length: '.filesize('example.zip')); //设置内容长度
?>