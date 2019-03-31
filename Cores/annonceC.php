<?PHP
include "C:/wamp64/www/ZINK/zink/config.php";
class AnnonceC {


	function ajouterAnnonce($ann){
		$sql="insert into a_produit(titre,type,description,image) values (:titre,:type,:description,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $titre=$ann->getTitre();
        $type=$ann->getType();
        $description=$ann->getDesc();
        $image=$ann->getImage();
		$req->bindValue(':titre',$titre);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAnnonce(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From a_produit Order by id Desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEmploye($cin){
		$sql="DELETE FROM employe where cin= :cin";
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
	function modifierProduit($prod,$nom){
		$sql="UPDATE produit SET nom_P=:nom, type_P=:type,prix=:price,image=:img,Description=:description WHERE nom_P=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $nom=$prod->getnom();
        $Description=$prod->getDescription();
        $type=$prod->getType();
        $price=$prod->getPrice();
        $image=$prod->getImage();
		
		$datas = array(':nom'=>$nom, ':Description'=>$Description, ':type'=>$type,':price'=>$price,':img'=>$image);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':type',$type);
		$req->bindValue(':price',$price);
		$req->bindValue(':img',$image);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($nom){
		$sql="SELECT * from produit where nom_P=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>