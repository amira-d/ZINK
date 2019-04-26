<?php

function testConnexion()
{
	session_start();
	$end=false;
	if (isset($_SESSION['mail'])&&isset($_SESSION['cin']))
		$end=true;
	
	return $end;
}

?>