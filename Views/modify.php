<?php
//insert.php
include "../Entities/ingprod.php";
include "../Cores/ingprodC.php";


if(isset($_POST['ingredient']))
{

if (!empty($_POST['ingredient']) )

{$prodC=new ingprodC();
$array=$_POST['ingredient'];
$liste= $prodC->recupererip($_POST['name']);

for ($i=0; $i < sizeof($array) ; $i++) { 
		# code...
	while ($data=$liste->fetch()) {
		if (strcmp ( $data['id']  ,  $array[$i] ) !== 0)
		{

         $prodC->supprimerunite($_POST['name'],$array[$i]);
          

		}
		else if (!isset($array[$i]))
		{
				echo "<script> alert(\" les champs\");</script>";

			         $prodC->supprimerunite($_POST['name'],$array[$i]);

		}
else
		{
	echo "<script> alert(\" les champs\");</script>";
		}
		# code...
	}
}
		header('Location: afficheringprod.php');

	
	
	//}
}
}





	





?>