<?php
$version=$_SERVER['SITE_VERSION'];
if('mermbers'==$version){
    if(!authenticate_user($_POST['username'],$_POST['password'])){
        header('Location:http://guest.example.cpm/');
        exit;
    }
}
include_once "{version}_header";