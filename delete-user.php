<?php
$dsn='mysql:dbname=lll;host=127.0.0.1';
$db=new PDO($dsn,'root','root');
$window='-7 days';
$sth=$db->prepare(
    "DELETE FROM users WHERE verified =0 AND ".
    "creted_on < datetime('now',?)"
);
$res=$sth->execute(array($window));
if($res){
    print "Deactivated".$sth->rowCount()."users.\n";
    
}else{
    print "can't delete users.\n";
}
?>