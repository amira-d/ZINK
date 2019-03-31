<?PHP
include "../config.php";
class CommandeC {
function afficherCommande ($commande ,$cin){

			$sql="SELECT * From commande where cin=$cin ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
       	
	}
	function afficherCommandess ($commande){
    $cin=$commande->getCin();
    $nom=$commande->getNom();
    $prenom=$commande->getPrenom() ;
    $numero=$commande->getNumero();
    $email=$commande->getEmail();
    $heures=$commande->getHeures() ;
    $minutes=$commande->getMinutes();
    $produits=$commande->getProduits();
    $prix=$commande->getPrix();
    $quantite=$commande->getQuantite();
    $eta=$commande->getEtat();
        
  }
	
function ajouterCommande($commande){
		$sql="insert into commande (cin,nom,prenom,numero,email,heures ,minutes,produits,quantite) values (:cin, :nom,:prenom,:numero,:email , :heures,:minutes,:produits,:quantite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$commande->getCin();
        $nom=$commande->getNom();
        $prenom=$commande->getPrenom();
        $numero=$commande->getNumero();
        $email=$commande->getEmail();
        $heures=$commande->getHeures();
        $minutes=$commande->getMinutes();
        $produits=$commande->getProduits();
      //  $prix=$commande->getPrix();
        $quantite=$commande->getQuantite();
      //  $etat=$commande->getEtat();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':heures',$heures);
		$req->bindValue(':minutes',$minutes);
		$req->bindValue(':produits',$produits);
	//	$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
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
	function supprimerCommande($cin){
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
	function modifierCommande($commande,$cin){
		$sql="UPDATE commande SET cin=:cin, nom=:nom,prenom=:prenom,numero=:numero,email=:email ,heures=:heures,minutes=:minutes ,produits=:produits,prix=:prix ,quantite=:quantite ,etat=:etat WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	    $cin=$commande->getCin();
        $nom=$commande->getNom();
        $prenom=$commande->getPrenom();
        $numero=$commande->getNumero();
        $email=$commande->getEmail();
        $heures=$commande->getHeures();
        $minutes=$commande->getMinutes();
        $produits=$commande->getProduits();
        $prix=$commande->getPrix();
        $quantite=$commande->getQuantite();
        $etat=$commande->getEtat();

		$datas = array(':cin'=>$cin,':nom'=>$nom,':prenom'=>$prenom,':numero'=>$numero, ':email'=>$email,':heures'=>$heures ,':minutes'=>$minutes,':produits'=>$produits, ':prix'=>$prix,':quantite'=>$quantite,':etat'=>$etat );
		
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':heures',$heures);
		$req->bindValue(':minutes',$minutes);
		$req->bindValue(':produits',$produits);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':etat',$etat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCommande($cin){
		$sql="SELECT * from commande where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function verifierCommande($cin)
	{		
                $sql="SELECT * from commande where cin=$cin";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		
         if ($liste->rowCount() > 0 )
         {
         	return true ;
         }
         else {
         	return false;
         }       

         }
       


        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }


	}
	
	function rechercherListeCommandes($cin){
		$sql="SELECT * from commande where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListeProduits($cin){
		$sql="SELECT * from commande where produits=$produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function rechercheAdmin($val){
		$sql="SELECT * FROM `commande` WHERE CONCAT(`cin`, `nom`, `prenom`, `numero`, `email`, `heures`, `minutes`, `produits`, `prix`, `quantite`, `etat`) LIKE '%$val%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function validerCommande($commande,$cin){
	$sql="UPDATE commande SET cin=:cin, nom=:nom,prenom=:prenom,numero=:numero,email=:email ,heures=:heures,minutes=:minutes ,produits=:produits,prix=:prix ,quantite=:quantite ,etat='Validee' WHERE cin= :cin ";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	    $cin=$commande->getCin();
        $nom=$commande->getNom();
        $prenom=$commande->getPrenom();
        $numero=$commande->getNumero();
        $email=$commande->getEmail();
        $heures=$commande->getHeures();
        $minutes=$commande->getMinutes();
        $produits=$commande->getProduits();
        $prix=$commande->getPrix();
        $quantite=$commande->getQuantite();
        $etat=$commande->getEtat();

		$datas = array(':cin'=>$cin,':nom'=>$nom,':prenom'=>$prenom,':numero'=>$numero, ':email'=>$email,':heures'=>$heures ,':minutes'=>$minutes,':produits'=>$produits, ':prix'=>$prix,':quantite'=>$quantite,':etat'=>$etat );
		
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':heures',$heures);
		$req->bindValue(':minutes',$minutes);
		$req->bindValue(':produits',$produits);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':etat',$etat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
}}

?>