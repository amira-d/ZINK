<?php

include "../config.php";
 $idstock=$_POST['idstock'];
 $nom=$_POST['nom'];
 $type=$_POST['type'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE stock SET `nom`='$nom' , `type`='$type'  WHERE `stock`.`idstock`='$idstock'    ");
$result->execute();
header('location: afficherstock.php');


  ?>