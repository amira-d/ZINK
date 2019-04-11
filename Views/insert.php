<?php
//insert.php
include "../Entities/ingprod.php";
include "../Cores/ingprodC.php";


if(isset($_POST['ingredient']))
{

if (!empty($_POST['ingredient']) )

{$prodC=new ingprodC();
$array=$_POST['ingredient'];


for ($i=0; $i < sizeof($array) ; $i++) { 
		# code...

	$prod=new ingprod($_POST['name'],$array[$i]);	
	
        $prodC->ajouterip($prod);
        header('Location: ceevee/Menu.php');
	}





	

}
}


?>