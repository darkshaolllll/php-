<?php
$falvors=array('vannilla','chocolate','rin');
$defaults=array(
    'name'=>'',
    'age'=>'',
    'flavor'=>array()
);
foreach($falvors as $falvor)
{
    $defaults['flavor'][$flavor]='';//可能因为flavor只能是默认值
}
if($_SERVER['REQUEST_METHOD']=='GET'){
    $errors=array();
    include __DIR__.'/show-form.php';
}else{
    $errors=validate_form();
    if(count($errors)){
        if(isset($_POST['name'])){$defaults['name']=$_POST['name'];}
        if(isset($_POST['age'])){$defaults['ahe']="checked='checked'";}
        foreach($flavors as $flavor){
            if(isset($_POST['flavor'])&&($_POST['flavor']==$flavor)){
                $defaults=['flavor'][$flavor]="slected='selected'";
            }
        }
        include __DIR__.'/show-form.php';
    }
    else{
        print 'it has been submitted';
    }
    
}
function validate_form(){
    global $flavors;
    $errors=array();
    if(!isset($_POST['name'])&&(strlen($_POST['name']>3))){
        $errors['name']='invalid name';
    }
    if(isset($_POST['age'])&&($_POST['age']!='1')){
        $errors['age']='invalid age checkbox value';
    }
    if(isset($_POST['flavor'])&&(!in_array($_POST['flavor'],$flavors))){
        $errors['flavor']='choese a invalid flavor';
    }
    return $errors;
}
?>