<?php

include "../config.php";
 $id = $_POST['ide'];
 $barcode=$_POST['barcode'];
 $quantity=$_POST['quantity'];
 $category=$_POST['category'];
 $type=$_POST['type'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE ingredient SET `barcode`='$barcode' , `quantity`='$quantity' , `category`='$category' , `type`='$type'  WHERE `ingredient`.`id`='$id'    ");
$result->execute();
header('location: afficheringredient.php');


  ?>