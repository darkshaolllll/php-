<?php
$dsn='mysql:dbname=lll;host=127.0.0.1';
$db=new PDO($dsn,'root','root');
$sth=$db->prepare('UPDATE users SET verified=1 WHERE email=? '.
    'AND verify_string=? AND verified=0'
);
$res=$sth->execute(array($_GET['email'],$_GET['verify_string']));

var_dump($res,$sth->rowCount());
if(! $res){
    print 'please try again later due to a database error.';
}
else{
    if($sth->rowCount()==1){
        print 'thank you,your account is verified.';
    }
    else{
        print "sorry,you could not be verified.";
    }
}
?>