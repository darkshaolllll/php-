<?php
$chocies=array('eggs','toast','coffee');
echo "<select name='food>\n";
foreach ($chocies as $chocie){
    echo "<option>$choice</option>\n";
}
echo "</select>";
if(! in_array($_POST['food'],$chocies)){
    echo "you must select a valid choice.";
}
?>