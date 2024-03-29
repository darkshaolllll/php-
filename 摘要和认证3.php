<?php

header("Content-type: text/html; charset=utf-8");

/*php摘要认证*/

$users = ['dee'=>'123456', 'admin'=>'admin'];
$realm = 'My Website';
$username = validate_digest($realm, $users);

print 'Hello, '.htmlentities($username);

function validate_digest($realm, $users) {

    if(! isset($_SERVER['PHP_AUTH_DIGEST'])) {
        send_digest($realm);
    }

    //如果摘要无法解析，则会失败
    //var_dump($_SERVER['PHP_AUTH_DIGEST']);
    //string 'username="你输入的用户名", realm="My Website", nonce="403b875881c55e60a6addd42b904a19c", uri="/php/phpcookbook/web/digest.php", response="080da94742f55682242e9c024529c298", opaque="49918e38b4734f44ffa587368a9e3e1a", qop=auth, nc=00000001, cnonce="d48ffb5a6cd062fc"' (length=253)
    $username = parse_digest($_SERVER['PHP_AUTH_DIGEST'], $realm, $users);
    if($username === false) {
        send_digest($realm);
    }
    return $username;
}

function send_digest($realm) {
    http_response_code(401);
    // header('HTTP/1.1 Unauthorized');
    $nonce = md5(uniqid()); //随机数
    $opaque = md5($realm);
    header('WWW-Authenticate:Digest realm="'.$realm.'", qop="auth", nonce="'.$nonce.'", opaque="'.$opaque.'"');
    //响应头 WWW-Authenticate:Digest realm="My Website", qop="auth", nonce="e0e5319efa00f94b815dbb4b34f88bb0", opaque="49918e38b4734f44ffa587368a9e3e1a"
    echo '需要用户名和密码才能继续访问';
    exit;
}

function parse_digest($digest, $realm, $users) {

    $digest_info = array();

    foreach(array('username', 'uri', 'nonce', 'cnonce', 'response') as $part) {
        if(preg_match('/'.$part.'=([\'"]?)(.*?)\1/', $digest, $match)) {
            $digest_info[$part] = $match[2];
        } else {
            return false;
        }
    }
    
    //确保提供了正确的qop
    if(preg_match('/qop=auth(,|$)/', $digest)) {
        $digest_info['qop'] = 'auth';
    } else {
        return false;
    }

    //确保提供了合法的nonce数
    if(preg_match('/nc=([0-9a-f]{8})(,|$)/', $digest, $match)) {
        $digest_info['nc'] = $match[1];
    } else{
        return false;
    }

    $A1 = $digest_info['username'].':'.$realm.':'.$users[$digest_info['username']];
    //var_dump($A1);
    //string '你输入的用户名:My Website:' (length=15)
    $A2 = $_SERVER['REQUEST_METHOD'].':'.$digest_info['uri'];
    //var_dump($A2);
    //string 'GET:/php/phpcookbook/web/digest.php' (length=35)
    $request_digest = md5(implode(':', [
            md5($A1),
            $digest_info['nonce'],
            $digest_info['nc'],
            $digest_info['cnonce'],
            $digest_info['qop'],
            md5($A2)
        ]));

    //比较发送的摘要与我们计算的摘要是否一致
    if($request_digest != $digest_info['response']) {
        return false;
    }

    //一切正常，返回用户名
    return $digest_info['username'];
}
?>