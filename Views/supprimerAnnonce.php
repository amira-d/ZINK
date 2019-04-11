<?PHP
include "../Cores/annonce.php";
$annonce=new annonceC();
if (isset($_POST["titre"])){
	$annonceC->supprimerannonce($_POST["titre"]);
	header('Location: annonces-produit.php');
}

?>