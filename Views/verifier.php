<?PHP
include "../Entities/admin.php";
include "../Cores/AdminC.php";

if (isset($_POST['PWD']) and isset($_POST['Email']))
{
if (!empty($_POST['PWD']) and !empty($_POST['Email']))
{$admin1C=new AdminC();
$email = $_POST['Email'];
$pwd = $_POST['PWD'];

$verif = $admin1C->recupererAdmin($email,$pwd);
if ($verif)
{
		header('Location: index-2.html'); 
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