<?PHP
include "../Cores/annonceC.php";
$annonce=new annonceC();
if (isset($_POST["titre"])){
	$annonce->supprimerannonce($_POST["titre"]);
	header('Location: annonces-produit.php');
}

?>