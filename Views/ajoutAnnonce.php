<?PHP
include "../Entities/annonce.php";
include "../Cores/annonceC.php";

$msg="";
if (isset($_POST['submit']) and isset($_POST['titre']) and isset($_POST['type']))

{
	if (!empty($_POST['image']) and !empty($_POST['type']) and !empty($_POST['description']))
{	echo "<script>alert(\"eeee vous\")</script>";
}
}


$target= "web/" .basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];


	$ann=new Annonce($image,$_POST['titre'],$_POST['type'],$_POST['description']);

$annC=new AnnonceC();
	echo "<script>alert(\"dddd vous\")</script>";

$annC->ajouterAnnonce($ann);
header('Location :annonces-produit.html');
	echo "<script>alert(\"Connectez vous\")</script>";


/*if (move_uploaded_file($_FILES['image']['tmp_name'], $target ))
{
	$msg= "IMAGE LOADED SUCCESSFULLY" ; 
}
else
{
	$msg = "Problem with uploading";
}*/
	
//}
//}
/*else{
	echo "vérifier les champs";
	echo "<script>alert(\"verifier les champs\")</script>";
}*/



?>