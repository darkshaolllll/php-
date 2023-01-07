<?php
if ($_SERVER['REQUEST_METHOD']=='GET'){?>
<form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="POST">
what is your first name?
<input type="text" name="first_name"/>
<input type="submit" value="say hello"/>

</form>
<?php 

}
else{
    echo 'hello,'.$_POST['first_name'].'!';
}
//plus版可以在php代码中写html
?>