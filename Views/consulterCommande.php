<?PHP
include "../entites/Commande.php";
include "../cores/CommandeC.php";

if (isset($_POST['cin']))
{
if (!empty($_POST['cin']))
{
$commande1C=new CommandeC();
$cin = $_POST['cin'];





 
$verif = $commande1C->verifierCommande($cin);
if ($verif)
{



    $_SESSION['cin'] = $cin;

		header('Location: afficherCommande.php?cin='.$cin.''); 
	echo "<script>alert(\"accee a votre formulaire\")</script>";
	}
		else
		{
                     	
					header('Location: consulterCommande.html'); 
				$message = 'commande n existe pas !';
					

		}


}
else
{


	
					header('Location: consulterCommande.html'); 
							$message = 'Veuillez indiquer votre Cin !';
}

}

?>