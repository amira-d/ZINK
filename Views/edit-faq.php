<?php

include "../config.php";
 $id = $_POST['id'];
 $question=$_POST['question'];
 $reponse=$_POST['reponse'];


$db=config::getConnexion();
$result=$db->prepare("UPDATE faq SET `question`='$question' , `reponse`='$reponse' ,   WHERE `faq`.`id`='$id'    ");
$result->execute();
header('location: ../views/tables-faq.php');


  ?>