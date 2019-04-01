<?PHP
include "../Cores/ingredientC.php";

$ingredientC=new ingredientC();
if (isset($_POST["id"])){
	$ingredientC->supprimeringredient($_POST["id"]);
	header('Location: afficheringredient.php');
}

?>