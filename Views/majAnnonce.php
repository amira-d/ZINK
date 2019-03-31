<?php

include "../Entities/annonce.php";
include "../Cores/annonceC.php";

 $submit = $_POST['submite'];
 $titre=$_POST['titre'];
 $type=$_POST['type'];
 $description=$_POST['description'];


$db=config::getConnexion();
$result=$db->prepare("UPDATE a_produit SET `submit`='$submit' , `titre`='$titre' , `type`='$type' , `description`='$description'  WHERE `a_produit`.`id`='$id'    ");
$result->execute();
header('location: annonces-produit.php');

  ?>