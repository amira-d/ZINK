<?php
session_start();
if (isset($_SESSION['Email']))
{
	$_SESSION['Email']='';
	$_SESSION['PWD']='';
	unset($_SESSION['Email']);
	unset($_SESSION['PWD']);
}

session_destroy();
header('Location: index-2.html');
?>