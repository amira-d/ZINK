<?php

include "../config.php";
 $cin = $_POST['cine'];
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $mail=$_POST['mail'];
 $sexe=$_POST['sexe'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE clientf SET `nom`='$nom' , `prenom`='$prenom' , `mail`='$mail' , `sexe`='$sexe'  WHERE `clientf`.`cin`='$cin'    ");
$result->execute();
header('location: afficherclient1.php');


  ?>