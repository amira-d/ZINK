<?PHP
if (basename($_SERVER['PHP_SELF'])=="ajoutclient.php")
{
	include "../Cores/clientfC.php";
	include "../Entities/clientf.php";
	session_start();
}
else
{
	include "../../Cores/clientfC.php";
	include "../../Entities/clientf.php";
		


}

if(isset($_POST['captcha_challenge']))
{
if(isset($_POST['captcha_challenge']) && $_POST['captcha_challenge'] == $_SESSION['captcha_text']){

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mdp'])and isset($_POST['mail']) and isset($_POST['sexe']) ){
$clientf1=new clientf($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mdp'],$_POST['mail'],$_POST['sexe']);

$clientf1C=new clientfC();
$clientf1C->ajouterclientf($clientf1);
header('Location: ZINK_FI/index.php');	
}
else
{
	echo "vérifier les champs";
}
//*/
}
else
{
	
	$_SESSION['prob']="true";
	header('Location: ZINK_FI/login-register.php');	

}
}
?>