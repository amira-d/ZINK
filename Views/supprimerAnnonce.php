<?PHP
include "../Cores/annonceC.php";
$annonce=new annonceC();
if (isset($_POST["id"])){
	$annonceC->supprimerannonce($_POST["id"]);
	header('Location: annonces-produit.php');
}

?>