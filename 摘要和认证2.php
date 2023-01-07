<?php
header("Content-type: text/html; charset=utf-8");
function pc_validate($user,$pass)
{
    $users=array('david'=>'aba',
    'adam'=>'adf');
    if(isset($users[$user])&&($users[$user]==$pass)){
        return true;
    }
    else{
        return false;
    }
}

if(!pc_validate(@$_SERVER['PHP_AUTH_USER'],@$_SERVER['PHP_AUTH_PW'])){//这里要加一个@
    header('WWW-Authenticate: Basic realm="My Website"');
    header('HTTP/1.0 401 Unauthorized');
    echo "you";
    exit;
}else
{
    echo "you are welcome";
}
?>