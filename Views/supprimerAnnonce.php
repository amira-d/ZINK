<?PHP
include "../Cores/annonceC.php";
<<<<<<< HEAD
$annonce=new annonceC();
if (isset($_POST["titre"])){
	$annonce->supprimerannonce($_POST["titre"]);
	header('Location: annonces-produit.php');
=======
$annonceC=new annonceC();
if (isset($_POST["id"])){
	$annonceC->supprimerannonce($_POST["id"]);
	header('Location:annonces-produit.php');
>>>>>>> parent of 2936103... Merge branch 'donia' of https://github.com/projet-web-elite/ZINK into donia
}

?>