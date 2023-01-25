<?php session_start();
	session_destroy();
	setcookie('user','Sorry Username/Password incorrect. 
    Block try After 10 minuts',time()+600);
	header("location:index.php");
?>