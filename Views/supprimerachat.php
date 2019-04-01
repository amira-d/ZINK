
<?PHP
include "../core/AchatA.php";
$AchatA=new AchatA();
if (isset($_POST["ref"])){
	$AchatA->supprimerachat($_POST["ref"]);
	header('Location: afficherachat.php');
}

?>