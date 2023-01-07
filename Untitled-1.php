<?php
$r=mysql_query("SELECT message FROM messages WHERE id ='1")or die ();
$ob=mysql_fetch_object($r);
$tabbed=str_replace(' ',"\t",$ob->message);
$spaced=str_replace("\t",' ',$ob->message);
print "with tabes:<pre>$tabbed</pre>";
?>