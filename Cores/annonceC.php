<?PHP
include "../config.php";
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
	function supprimerannonce($id){
		$sql="DELETE FROM a_produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAnnonce($prod,$nom){
		$sql="UPDATE a_produit SET titre=:titre, type=:type,description=:description,image=:img WHERE titre=:titre";
		
		$db = config::getConnexion();
	
try{		
        $req=$db->prepare($sql);
		
       
        $titre=$ann->getTitre();
        $type=$ann->getType();
        $description=$ann->getDesc();
        $image=$ann->getImage();
		
		$datas = array(':titre'=>$titre, ':type'=>$type, ':description'=>$description,':img'=>$image);
	    $req->bindValue(':titre',$titre);
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererAnnonce($titre){
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