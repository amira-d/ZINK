<?PHP
include "../config.php";
class livraisonC {
function afficherLivraison ($livraison ){

			$sql="SELECT * From livraison ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
function ajouterLivraison($livraison){
		$sql="insert into livraison (cin,nom,prenom,numero,email,heures ,minutes) values (:cin, :nom,:prenom,:numero,:email , :heures,:minutes)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		//$location=$livraison->getLocation();
        $cin=$livraison->getCin();
        $nom=$livraison->getNom();
        $prenom=$livraison->getPrenom();
        $numero=$livraison->getNumero();
        $email=$livraison->getEmail();
        $heures=$livraison->getHeures();
        $minutes=$livraison->getMinutes();
       // $produits=$livraison->getProduits();
      //  $prix=$commande->getPrix();
       // $quantite=$livraison->getQuantite();
      //  $etat=$commande->getEtat();
        	//$req->bindValue(':location',$location);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':heures',$heures);
		$req->bindValue(':minutes',$minutes);
		//$req->bindValue(':produits',$produits);
	//	$req->bindValue(':prix',$prix);
		//$req->bindValue(':quantite',$quantite);
	//	$req->bindValue(':etat',$etat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
		
	}
	
	function afficherCommandes($commande){
		//$sql="SElECT * From commandes c inner join projet_web.commande a on e.cin= a.cin";
		$sql="SELECT * from commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


		function supprimerlivraison($cin){
		$sql="DELETE FROM commande where cin= $cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	}

?>