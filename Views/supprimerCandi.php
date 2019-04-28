<?PHP
include "../Cores/recruC.php";
$recruC=new recruC();
if (isset($_POST["id"])){
	$recruC->supprimerRecrutement($_POST["id"]);
	header('Location:carriere.php');
}

?>