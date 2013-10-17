<?php

$username="sysop";
$password="sysop";

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

if($myusername==$username and $mypassword==$password){

session_register("myusername");
session_register("mypassword");
header("location:index.php");
}
else {
header("location:login.php");
}
?>
