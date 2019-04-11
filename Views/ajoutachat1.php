<?PHP
include "../core/AchatA.php";
include "../achat.php";
if (isset($_POST['ref']) and isset($_POST['prix']) and isset($_POST['nbr']) ){
$achat1=new achat($_POST['ref'],$_POST['prix'],$_POST['nbr']);

$achat1C=new AchatA();
$achat1C->ajouterachat1($achat1);
header('Location: afficherachat1.php');
	
}else{
	echo "vérifier les champs";
}


?>