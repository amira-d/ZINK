<?PHP
  include "../Entities/Livraison.php";
include "../Cores/LivraisonC.php";
include_once 'locations_model.php';

$livraison1C=new LivraisonC();
 if (isset($_POST["cin"])){
$livraison1C->supprimerlivraison($_POST["cin"]); 

   // $message=("commande supprimée");
$message = 'livraison supprimée !';
            header('Location: afficherlivraison.php'); 

}
else { echo "<script>alert(\"erreur\")</script>";}

?>