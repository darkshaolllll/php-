<?php
if(!checkdate($_POST['month'],$_POST['day'],$_POST['year'])){
    print "the day you entered doesn't exist";
}
?>