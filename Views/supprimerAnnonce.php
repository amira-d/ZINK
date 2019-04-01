<?PHP
include "../Cores/annonceC.php";
$annonceC=new annonceC();
if (isset($_POST["titre"])){
	$annonceC->supprimerannonce($_POST["titre"]);
	header('Location: annonces-produit.php');
}

?>