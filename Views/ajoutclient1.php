<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['sexe']) ){
$client1=new client($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['sexe']);

$client1C=new clientC();
$client1C->ajouterclient($client1);
header('Location: afficherclient.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>