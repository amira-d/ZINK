<?PHP
include "../Entities/user.php";
include "../Cores/userC.php";

if (isset($_POST['PWD']) and isset($_POST['Email']))
{
if (!empty($_POST['PWD']) and !empty($_POST['Email']))
{$user1C=new userC();
$email = $_POST['Email'];
$pwd = $_POST['PWD'];

$verif = $user1C->recupereruser($email,$pwd);
if ($verif)
{
		header('Location: afficherclient.php'); 
	echo "<script>alert(\"Connectez vous\")</script>";
}
		else 
		{

					header('Location: page-login.html'); 
						echo "<script> alert(\"vérifier les champs\")</script>";

		}

}
}

else
{


	echo "<script> alert(\"vérifier les champs\")</script>";
}


?>