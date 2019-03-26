<?PHP
include "../Entities/admin.php";
include "../Cores/AdminC.php";

if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['pwd']))

{
	if (!empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['pwd']))
{$admin1=new Admin($_POST['username'],$_POST['email'],$_POST['pwd']);

$admin1C=new AdminC();

$admin1C->ajouterAdmin($admin1);
	echo "<script>alert(\"Connectez vous\")</script>";

header('Location: page-login.html'); }
else
{
		echo "<script>alert(\"Les champs sont vides\")</script>";
		header('Location: page-register.html'); }




	
}
else{
	echo "vérifier les champs";
	echo "<script>alert(\"verifier les champs\")</script>";
}
//*/

?>