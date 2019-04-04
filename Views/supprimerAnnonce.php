<?PHP
include "../Cores/annonceC.php";
$annonceC=new annonceC();
if (isset($_POST["id"])){
	$annonceC->supprimerannonce($_POST["id"]);
	header('Location:annonces-produit.php');
}

?>