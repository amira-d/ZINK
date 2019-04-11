<?PHP
include "../Cores/stockC.php";

$stockC=new stockC();
if (isset($_POST["idstock"])){
	$stockC->supprimerstock($_POST["idstock"]);
	header('Location: afficherstock.php');
}

?>