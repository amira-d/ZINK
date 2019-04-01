<?PHP

include "../Entities/ingredient.php";
include "../Cores/ingredientC.php";

if (isset($_POST['id']) and isset($_POST['barcode']) and isset($_POST['quantity']) and isset($_POST['category']) and isset($_POST['type'])){
if (!empty($_POST['id']) and !empty($_POST['barcode']) and !empty($_POST['quantity']) and !empty($_POST['category']) and !empty($_POST['type'])){

$ingredient1=new ingredient($_POST['id'],$_POST['barcode'],$_POST['quantity'],$_POST['category'],$_POST['type']);
//Partie2
/*
var_dump($ingredient1);
}
*/
//Partie3
$ingredient1C=new ingredientc();
$ingredient1C->ajouteringredient($ingredient1);
header('Location: afficheringredient.php');
	
}}/*else{
	echo "vérifier les champs";
}
//*/

?>