<?php

include "../entites/Livraison.php";
include "../cores/LivraisonC.php";
include_once 'locations_model.php';
$livraison1C=new LivraisonC();
 if (isset($_POST["id"])){
 $livraison1C->supprimerLocalisation($_POST["id"]); 

   // $message=("localisation supprimée");
$message = 'localisation supprimée !';
            header('Location: admin-map.php'); 

}
else { echo "<script>alert(\"erreur\")</script>";}

?>