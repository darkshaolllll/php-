<?php
$dsn='mysql:dbname=lll;host=127.0.0.1';
$db=new PDO($dsn,'root','root');//连接数据库书中的是sqlite 这里需要连接mysql
$email='david';
$verify_string='';
for($i=0;$i<8;$i++){
    $verify_string.=chr(mt_rand(32,62));//拼接随机数
}
$sth=$db->prepare(
    "INSERT INTO users".
    "(email,created_on,verify_string,verified)".
    "VALUES(?,NOW(),?,0)"
);
$sth->execute(array($email,$verify_string));//传给两个问号
$verify_string=urldecode($verify_string);
$safe_email=urldecode($email);
$verify_url="http://www.example.com/verify-user.php";
$mail_body=<<<_MAIL_
To $email:
palease clik on the following link to verify your account creation:
$verify_url?email=$safe_email&verifu_string=&verify_string

if you do not verify your account in the next seven days,it will be deleted.
_MAIL_;
// mail($email,"User Verification",$mail_body);
print "$email,$mail_body";
print ($verify_string);

?>