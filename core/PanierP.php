<?php
include "../config.php";
include "../entities/panier.php";
class panier{

	
function afficherpanier(){
		$sql="SElECT * From panier ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}