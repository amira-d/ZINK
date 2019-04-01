<?PHP

include "../Entities/stock.php";
include "../Cores/stockC.php";

if (isset($_POST['idstock']) and isset($_POST['nom']) and isset($_POST['type'])){
if (!empty($_POST['idstock']) and !empty($_POST['nom']) and !empty($_POST['type'])){

$stock1=new stock($_POST['idstock'],$_POST['nom'],$_POST['type']);
//Partie2
/*
var_dump($stock1);
}
*/
//Partie3
$stock1C=new stockc();
$stock1C->ajouterstock($stock1);


header('Location: afficherstock.php');
	
}}/*else{
	echo "vérifier les champs";
}
//*/

?>