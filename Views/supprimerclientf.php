<?PHP
include "../cores/clientfC.php";
$clientfC=new clientfC();
if (isset($_POST["cin"])){
	$clientfC->supprimerclientf($_POST["cin"]);
	header('Location: afficherclient1.php');
}

?>