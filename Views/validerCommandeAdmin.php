<?PHP
include "../entites/Commande.php";
include "../cores/CommandeC.php";
 

 	$cin=$_GET['cin'];
   $commande1=new commande($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['numero'],$_POST['email'],$_POST['heures'],$_POST['minutes'],$_POST['produits'],$_POST['prix'],$_POST['quantite'],$_POST['etat']);
    
$commande1C->validerCommande($commande1,$cin); 
   // header('Location: afficherEmploye.php');

            header('Location: afficherCommandeAdmin.php'); 


?>