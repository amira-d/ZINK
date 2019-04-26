<?php

function testConnexion()
{
	session_start();
	$end=false;
	if (isset($_SESSION['cin'])&&isset($_SESSION['mdp']))
		$end=true;
	
	return $end;
}

?>