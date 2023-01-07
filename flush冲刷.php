<?php
print str_repeat(' ',300);
print 'asdafaf';
flush();
$sth=$dbh->query(
    'select shape,count(*) as c from snowflakes group by shape having c >1'
);
?>
