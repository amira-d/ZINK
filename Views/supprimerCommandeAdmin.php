<?PHP
include "../entites/Commande.php";
include "../cores/CommandeC.php";
   $commande1C=new CommandeC();
 if (isset($_POST["cin"])){
$commande1C->supprimerCommande($_POST["cin"]); 

   // $message=("commande supprimée");
$message = 'commande supprimée !';
            header('Location: afficherCommandeAdmin.php'); 

}
else { echo "<script>alert(\"erreur\")</script>";}

?>