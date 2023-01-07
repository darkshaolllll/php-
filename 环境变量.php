<?php
print $_ENV['HOSTNAME'];
putenv('ORACLE_SID=ORACLE');
var_dump($_ENV);
?>