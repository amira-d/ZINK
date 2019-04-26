<?php
session_start();
if (isset($_SESSION['cin']))
{
	$_SESSION['cin']='';
	$_SESSION['mdp']='';
	unset($_SESSION['cin']);
	unset($_SESSION['mdp']);
}

session_destroy();
header('Location: index.php');
?>