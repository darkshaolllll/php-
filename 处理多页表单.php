<?php
session_start();
foreach ($_SESSION as $key => $value)
{
    print($key." ");
}
if(($_SERVER['REQUEST_METHOD']=='GET')||(!isset($_POST['stage'])))
{
    $stage=1;
}
else{
    $stage=(int)$_POST['stage'];
}
if($stage>1){
    foreach($_POST as $key => $value){
        $_SESSION['$key']=$value;
    }
}
if($stage==1){
    ?>
    <form action='<?php echo $_SERVER['SCRIPT_NAME']?>' method='POST'>
    Name:<input type='text' name='name'/><br/>
    Age:<input type="text" name="age"/><br/>
    <input type='hidden' name="stage" value='<?php echo $stage+1 ?>'/>
    <input type="submit" value="Next"/>
    </form>
<?php }else if($stage==2){ ?>
    <form action='<?php echo $_SERVER['SCRIPT_NAME']?>' method='POST'>
    favorite color:<input type='text' name='color'/><br/>
    favorite food:<input type='text' name='food'/><br/>
    <input type='hidden' name='stage' value='<?php echo $stage+1 ?>'/>
    <input type='submit' value='Done'/>
    </form>
<?php }else if($stage==3){ ?>
    hello <?php echo $_SESSION['name']?>
    you are <?php echo $_SESSION['age']?>years old.
    your favorite color is<?php echo $_SESSION['color']?>
    and your favorite food is<?php echo $_SESSION['food']?>
<?php }?>
