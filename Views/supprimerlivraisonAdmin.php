<?PHP
  include "../Entities/Livraison.php";
include "../Cores/LivraisonC.php";
include_once 'locations_model.php';

$livraison1C=new LivraisonC();
 if (isset($_POST["cin"])){
$commande1C->supprimerCommande($_POST["cin"]); 

   // $message=("commande supprimée");
$message = 'commande supprimée !';
            header('Location: afficherCommandeAdmin.php'); 

}
else { echo "<script>alert(\"erreur\")</script>";}

?>